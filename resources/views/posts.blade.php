@extends('app')

@section('content')
@forelse($wishlists as $post)
    <p class="text-center">name: {{$post->name}}</p>
    <p class="text-center">title: {{$post->titel}}</p>
    <p class="text-center">post: {{$post->blogpost}}</p>
@empty
    <p class="text-center">nothing in the blog</p>
@endforelse
@endsection
