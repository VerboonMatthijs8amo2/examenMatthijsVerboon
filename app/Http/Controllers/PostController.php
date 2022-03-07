<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index (){
        $wishlists = \App\Post::all();
        return view('posts', compact('wishlists'));
    }
    public function create (){
        return view('newpost');
    }
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'titel' => 'required',
            'blogpost' => 'required',
        ]);


        $form_data = array(
            'name'       =>   $request->name,
            'titel' =>   $request->titel,
            'blogpost'        =>   $request->blogpost,
            'user_id' =>     Auth()->user()->id
        );

        \App\Post::create($form_data);

        return redirect('posts');
    }
    public function show(\App\Post $itemid){

        return view('show',compact('itemid'));
    }
    public function edit(\App\post $itemid){
        return view('edit',compact('itemid'));
    }
    public function update(\App\Post $itemid){
        $data = request()->validate([
            'name' => 'required',
            'titel' => 'required',
            'blogpost' => 'required',
        ]);

        $itemid->update($data);
        return redirect('admin');
    }
    public function admin (){
        $wishlists = \App\Post::all();
        return view('admin', compact('wishlists'));
    }

    public function delete(\App\Post $itemid){
        $itemid->delete();
        return redirect('admin');
    }
}
