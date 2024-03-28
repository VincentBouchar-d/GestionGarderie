@extends('layouts.app')

@section('content')
    <h1>Liste des garderies</h1>
    @if (count($garderies))
        

            @foreach($garderies as $garderie)
                <div class='item'>
                    <h2><a href="{{ route('show', ['id' => $garderie -> id])}}">{{ $garderie->Nom}}</a></h2>
                    <form method='put'>
                        <button onclick="this.form.action='{{ route('garderies.modifier',['id' => $garderie -> id])}}'">Modifier</button>
                    </form>
                    <form method='POST'>
                        @csrf
                        @method('DELETE')
                        <button onclick='if(confirm("Voulez-vous vraiment supprimer la garderie ?"))this.form.action="{{ route("garderies.supprimer",["id" => $garderie -> id])}}"'>Supprimer</button>
                    </form>
                </div>

            @endforeach
            <br>
            
    @else
        <span>Aucune garderie pour le moment</span>
    @endif
    <h1>Créer une garderie</h1>
            <form method='POST' action='{{route('garderies.store')}}'>
                @csrf
                <table>
                    <tr>
                        <td>
                            <label>Nom : </label>
                        </td>
                        <td>
                            <input type='text' name='nom' class='border-gray-600 border-2'>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Adresse : </label>
                        </td>
                        <td>
                            <input type='text' name='adresse' class='border-gray-600 border-2'>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Ville : </label>
                        </td>
                        <td>
                            <input type='text' name='ville' class='border-gray-600 border-2'>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Province : </label>
                        </td>
                        <td>
                            <input type='text' name='province' class='border-gray-600 border-2'>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Num telephone : </label>
                        </td>
                        <td>
                            <input type='text' name='telephone' class='border-gray-600 border-2'>
                        </td>
                    </tr>
                </table>
                

                <button type='submit' class='bg-green-500'>Créer une garderie</button>


            </form>
        
@endsection