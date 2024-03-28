@extends('layouts.app')

@section('content')

    <h1>Modifier une garderie</h1>
    <form method='POST' action='{{route('garderies.update',['id' => $garderie -> id])}}'>
        @csrf
        @method('PUT')
        <label>Nom : </label>
        <input readonly type='text' name='title' class='border-gray-600 border-2' value='{{$garderie->Nom}}'>
        <br>
        <label>Adresse : </label>
        <input type='text' name='title' class='border-gray-600 border-2' value='{{$garderie->Adresse}}'>
        <br>
        <label>Ville : </label>
        <input type='text' name='title' class='border-gray-600 border-2' value='{{$garderie->Ville}}'>
        <br>
        <label>Province : </label>
        <input type='text' name='title' class='border-gray-600 border-2' value='{{$garderie->Province}}'>
        <br>
        <button type='submit' class='bg-green-500'>Modifier une garderie</button>

    </form>
@endsection