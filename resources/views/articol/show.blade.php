@php($i=1)
@extends('layouts.main')
@section('content')
    <div>

        <div>Art ID ={{$articol->id}}</div>
        <div>Art Nr={{$articol->art_nummer}}</div>
        <div>PLC ={{$articol->plc_nummer}}</div>
        <div>Pret ={{sprintf("%01.2f",$articol->art_price)}}</div>



    </div>
    <br>
    <div>

    </div>
    <div>
        <div>

            <a href="{{route('articol.edit',$articol->id)}}">Edit</a>
        </div>
        <div>
{{--            <form action="{{route('post.delete',$post->id)}}" method="post">--}}
{{--                @csrf--}}
{{--                @method('delete')--}}
{{--                <input type="submit" value="Delete" class="btn btn-danger">--}}
{{--            </form>--}}

{{--        </div>--}}
{{--        <div>--}}

            <a href="{{route('articol.index')}}">Back</a>
        </div>

    </div>

@endsection
