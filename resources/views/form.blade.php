@extends('layouts.app')

@section('content')
    <h1>Créer une garderie</h1>
    <form method='POST' action='{{route('posts.store')}}'>
        @csrf
        <input type='text' name='title' class='border-gray-600 border-2'>
        <input type='text' name='title' class='border-gray-600 border-2'>
        <input type='text' name='title' class='border-gray-600 border-2'>
        <input type='text' name='title' class='border-gray-600 border-2'>
        <input type='text' name='title' class='border-gray-600 border-2'>

        <button type='submit' class='bg-green-500'>Créer un post</button>


    </form>
   
@endsection
