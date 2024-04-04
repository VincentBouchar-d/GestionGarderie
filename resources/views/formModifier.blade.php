@extends('layouts.app')

@section('content')

    <h1>Modifier une garderie</h1>
    <form method='POST' action='{{route('garderies.update',['id' => $garderie -> id])}}'>
        @csrf
        @method('PUT')
        <label>Nom : </label>
        <input readonly type='text' name='Nom' class='border-gray-600 border-2 bg-secondary' value='{{$garderie->Nom}}'>
        <br>
        <label>Adresse : </label>
        <input type='text' name='Adresse' class='border-gray-600 border-2' value='{{$garderie->Adresse}}'>
        <br>
        <label>Ville : </label>
        <input type='text' name='Ville' class='border-gray-600 border-2' value='{{$garderie->Ville}}'>
        <br>
        <label>Province : </label>
        <select class='border-gray-600 border-2'name='id_province'>
            @foreach($provinces as $province)
                @if($province->id == $garderie->id_province)
                    <option value="{{$province->id}}" selected>{{$province->description}}</option>
                @else
                    <option value="{{$province->id}}">{{$province->description}}</option>
                @endif
            @endforeach
        </select>
        <br>
        <label>Num telephone : </label>
        <input type='text' name='Telephone' class='border-gray-600 border-2' value='{{$garderie->Telephone}}'>
        <br><br>
        <button type='submit' class='btn btn-success'>Modifier une garderie</button>
        <input type='button' onclick='history.back()' class='btn btn-danger' value='Annuler'>

    </form>
@endsection