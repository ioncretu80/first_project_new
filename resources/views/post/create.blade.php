@php($i=1)
@extends('layouts.main')
@section('content')
    <form action="{{route('post.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea  class="form-control" id="content" name="content" placeholder="Content"></textarea>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="Image">
        </div>




        <button type="submit" class="btn btn-primary">Create</button>
    </form>


@endsection
