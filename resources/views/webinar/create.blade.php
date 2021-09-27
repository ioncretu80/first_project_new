@php($i=1)
@extends('layouts.main')
@section('content')
    <form action="{{route('webinar.store')}}" method="post"  enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Text</label>
            <input type="text" class="form-control" id="text" name="text" placeholder="Text">
        </div>

        <div class="form-group">
            <label for="content">YouTube Url</label>
            <textarea  class="form-control" id="youtube_url" name="youtube_url" placeholder="YouTube Url"></textarea>
        </div>

        @csrf
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif



        <div class="mb-3">
            <label for="formFile" class="form-label">Default file</label>
            <input class="form-control" type="file" id="formFile" name="formFile">
        </div>






        <button type="submit" class="btn btn-primary">Create</button>
    </form>


@endsection
