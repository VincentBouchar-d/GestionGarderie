@extends('layouts.app')

@section('content')
    <div>
        <h1>{{ $garderie->nom }}</h1>
        <p>{{ $garderie->adresse }}</p>
        <p>{{ $garderie->ville }}</p>
        <p>{{ $garderie->province }}</p>
        <p>{{ $garderie->telephone }}</p>
        <br>
    </div>
@endsection