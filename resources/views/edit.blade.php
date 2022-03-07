@extends('app')

@section('content')
    <p>update item</p>
    <form action="/post/{{$itemid->id}}" method="post">

        @method('PATCH')
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" name="name" class="form-control" value="{{$itemid->name}}">
            @error('name') <p>{{ $message }}</p> @enderror
        </div>
        <div class="form-group">
            <label for="titel">titel</label>
            <input type="text" name="titel" class="form-control" value="{{$itemid->titel}}">
            @error('description') <p>{{ $message }}</p> @enderror

        </div>
        <div class="form-group">
            <label for="blogpost">blogpost</label>
            <input type="text" name="blogpost" class="form-control" value="{{$itemid->blogpost}}">
            @error('price') <p>{{ $message }}</p> @enderror

        </div>


        @csrf
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
