@extends('app')

@section('content')

    @if(isset(Auth::user()->email))
        <a href="{{ url('/login/logout')}}"><button type="button" class="btn btn-primary">log out</button></a>
        <a href="{{'/posts/create'}}" ><button type="button" class="btn btn-primary">add new post</button></a>

        @forelse($wishlists as $post)
            <p class="text-center">name: {{$post->name}}</p>
          <a href="/post/{{$post->id}}">  <p class="text-center">title: {{$post->titel}}</p></a>
            <p class="text-center">post: {{$post->blogpost}}</p>
        @empty
            <p class="text-center">nothing in the blog</p>
        @endforelse
    @else
        <script>window.location="/login"</script>
    @endif

@endsection
