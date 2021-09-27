@php($i=1)
@extends('layouts.main')
@section('content')


    <div>
        <br>
        <div>
            <a href="{{route('articol.create')}}" class="btn btn-primary">Add one</a>
        </div>


        <h1>
            Articole
        </h1>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Art. Numar</th>
                <th scope="col">Articol Nume</th>

                <th scope="col">PLC</th>
                <th scope="col">Descriere</th>
                <th scope="col">Pret</th>
            </tr>
            </thead>
            <tbody>
            @foreach($articols as $articol)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td><a href="{{route('articol.show',$articol->id)}}">{{$articol->art_nummer}}</a></td>
                    <td>{{$articol->art_name}}</td>
                    <td>{{$articol->plc_nummer}}</td>
                    <td>{{$articol->art_description}}</td>
                    <td>{{sprintf("%01.2f",$articol->art_price)}}</td>
                </tr>

            @endforeach


            </tbody>
        </table>
{{--        <div>--}}
{{--                <input class="btn btn-primary" type="button" onclick="window.location.href='{{route('articol.create')}}';" value="Add one" />--}}
{{--        </div>--}}

    </div>

@endsection
