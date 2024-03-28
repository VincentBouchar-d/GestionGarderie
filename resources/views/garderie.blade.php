@extends('layouts.app')

@section('content')
    <div>
        <h1>{{ $garderie->Nom }}</h1>
        <p>Adresse : {{ $garderie->Adresse }}</p>
        <p>Ville : {{ $garderie->Ville }}</p>
        <p>Province : {{ $garderie->Province }}</p>
        <br>
    </div>
@endsection