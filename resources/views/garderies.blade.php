@extends('layouts.app')

@section('content')
    <h1>Liste des garderies</h1>
    @if (count($garderies))
        

            @foreach($garderies as $garderie)
                <div class='item'>
                    <h2><a href="{{ route('show', ['idGarderie' => $garderie -> idGarderie])}}">{{ $garderie->nom}}</a></h2>
                    <form method='put'>
                        <button onclick="this.form.action='{{ route('garderies.modifier',['idGarderie' => $garderie -> idGarderie])}}'">Modifier</button>
                    </form>
                    <form method='POST'>
                        @csrf
                        @method('DELETE')
                        <button onclick='if(confirm("Voulez-vous vraiment supprimer la garderie ?"))this.form.action="{{ route("garderies.supprimer",["idGarderie" => $garderie -> idGarderie])}}"'>Supprimer</button>
                    </form>
                </div>

            @endforeach
            <br>
            <h1>Créer une garderie</h1>
            <form method='POST' action='{{route('garderies.store')}}'>
                @csrf
                <input type='text' name='nom' class='border-gray-600 border-2'>
                <input type='text' name='adresse' class='border-gray-600 border-2'>
                <input type='text' name='ville' class='border-gray-600 border-2'>
                <input type='text' name='province' class='border-gray-600 border-2'>
                <input type='text' name='telephone' class='border-gray-600 border-2'>

                <button type='submit' class='bg-green-500'>Créer une garderie</button>


            </form>
        
    @else
        <span>Aucune garderie pour le moment</span>
    @endif
@endsection