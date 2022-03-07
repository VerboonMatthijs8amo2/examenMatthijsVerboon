@extends('app')

@section('content')

    <p>{{$itemid->name}}</p>

    <a href="/post/{{$itemid->id}}/edit">edit</a>
    <form action="/post/{{$itemid->id}}" method="post">
        @csrf
        @method("DELETE")
        <button>delete</button>
    </form>
@endsection
