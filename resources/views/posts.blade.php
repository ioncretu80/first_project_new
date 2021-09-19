@php($i=1)
@extends('layouts.main')
@section('content')
<div>
    my posts
</div>

    <div>
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
                    <td>{{$post->title}}</td>
                    <td>{{$post->content}}</td>
                    <td>{{$post->likes}}</td>
                </tr>

            @endforeach


            </tbody>
        </table>


    </div>

@endsection
