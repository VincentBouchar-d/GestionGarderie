@extends('layouts.app')

@section('content')
    <div>
        <h1>{{ $garderie->Nom }}</h1>
        <p>Adresse : {{ $garderie->Adresse }}</p>
        <p>Ville : {{ $garderie->Ville }}</p>
        <p>Province : {{ $province }}</p>
        <p>Téléphone : {{ $garderie->Telephone }}</p>
        <br>
    </div>
@endsection