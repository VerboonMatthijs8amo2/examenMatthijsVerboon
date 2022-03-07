@extends('app')

@section('content')
    <p>add new post</p>

    <form action="/posts" method="post" enctype="multipart/form-data">


        <div class="form-group">
            <label for="name">name</label>
            <input type="text" name="name" class="form-control">
            @error('name') <p>{{ $message }}</p> @enderror
        </div>

        <div class="form-group">
            <label for="titel">titel</label>
            <input type="text" name="titel" class="form-control">
            @error('titel') <p>{{ $message }}</p> @enderror

        </div>
        <div class="form-group">
            <label for="blogpost">blogpost</label>
            <input type="text" name="blogpost" class="form-control">
            @error('blogpost') <p>{{ $message }}</p> @enderror


        </div>
        @csrf
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
