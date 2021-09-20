@php($i=1)
@extends('layouts.main')
@section('content')


    <div>
        <br>
        <div>
            <a href="{{route('post.create')}}" class="btn btn-primary">Add one</a>
        </div>


        <h1>
            my posts
        </h1>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Likes</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td><a href="{{route('post.show',$post->id)}}">{{$post->title}}</a></td>
                    <td>{{$post->content}}</td>
                    <td>{{$post->likes}}</td>
                </tr>

            @endforeach


            </tbody>
        </table>
        <div>
                <input class="btn btn-primary" type="button" onclick="window.location.href='{{route('post.create')}}';" value="Add one" />
        </div>

    </div>

@endsection
