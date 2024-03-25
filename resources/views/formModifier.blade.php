@extends('layouts.app')

@section('content')

    <h1>Modifier une garderie</h1>
    <form method='POST' action='{{route('garderies.update',['idGarderie' => $garderie -> idGarderie])}}'>
        @csrf
        @method('PUT')

        <input readonly type='text' name='title' class='border-gray-600 border-2' value='{{$garderie->Nom}}'>
        <input type='text' name='title' class='border-gray-600 border-2' value='{{$post->adresse}}'>
        <input type='text' name='title' class='border-gray-600 border-2' value='{{$post->ville}}'>
        <input type='text' name='title' class='border-gray-600 border-2' value='{{$post->province}}'>
        <input type='text' name='title' class='border-gray-600 border-2' value='{{$post->telephone}}'>
        <button type='submit' class='bg-green-500'>Modifier une garderie</button>
    </form>
@endsection