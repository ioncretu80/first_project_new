@php
    $i=1;


@endphp
@extends('layouts.main')
@section('content')
    <form action="{{route('post.update',$post->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{$post->title}}">
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea  class="form-control" id="content" name="content" placeholder="Content" >{{$post->content}}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="Image" value="{{$post->image}}">
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <select class="form-control" id="category_id" name="category_id">

                @foreach($categories as $category)


                    <option
                        {{$category->id == $post->category->id ? 'selected' : ''}}
                        value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>



        <button type="submit" class="btn btn-primary">Update</button>
    </form>


@endsection
