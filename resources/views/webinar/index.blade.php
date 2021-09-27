@php($i=1)
@extends('layouts.main')
@section('content')


    <div>
        <br>
        <div>
            <a href="{{route('webinar.create')}}" class="btn btn-primary">Add one</a>
        </div>


        <h1>
            Webinare
        </h1>
        <br>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Text</th>
                <th scope="col">Youtube link</th>
                <th scope="col">Image Path</th>
                <th scope="col">Imageview</th>
            </tr>
            </thead>
            <tbody>
            @foreach($webinars as $webinar)
            <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$webinar->text}}</td>
                <td>{{$webinar->youtube_url}}</td>
                <td>{{$webinar->image_path}}</td>
                <td><img style="max-width: 50px" src="image/webinars/1.jpg" class="img-thumbnail" alt="..."></td>
            </tr>
            @endforeach
            </tbody>
        </table>

{{--        <div>--}}
{{--                <input class="btn btn-primary" type="button" onclick="window.location.href='{{route('articol.create')}}';" value="Add one" />--}}
{{--        </div>--}}


    </div>

@endsection
