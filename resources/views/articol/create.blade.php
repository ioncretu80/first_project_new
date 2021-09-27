@php($i=1)
@extends('layouts.main')
@section('content')
Create Artikel

<form action="{{route('articol.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="art_nummer">Art Nummer</label>
        <input type="text" class="form-control" id="art_nummer" name="art_nummer" placeholder="Articol nummar">
    </div>

    <div class="form-group">
        <label for="art_name">Nume Articol</label>
        <textarea  class="form-control" id="art_name" name="art_name" placeholder="Nume articol"></textarea>
    </div>

    <div class="form-group">
        <label for="plc_nummer">PLC</label>
        <input type="text" class="form-control" id="plc_nummer" name="plc_nummer" placeholder="PLC">
    </div>
    <div class="form-group">
        <label for="art_description">Descriere</label>
        <input type="text" class="form-control" id="art_description" name="art_description" placeholder="Descriere">
    </div>
    <div class="form-group">
        <label for="art_price">Pret</label>
        <input type="text" class="form-control" id="art_price" name="art_price" placeholder="Pret">
    </div>




    <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection
