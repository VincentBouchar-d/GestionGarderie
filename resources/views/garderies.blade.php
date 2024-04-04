@extends('layouts.app')

@section('content')
    <h1>Liste des garderies</h1>
    @if (count($garderies))
        <table>
            <tr>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Province</th>
                <th>Num telephone</th>
                <td>
                    <form method='POST'>
                        @csrf
                        @method('DELETE')
                        <button class='btn btn-warning' onclick='if(confirm("Voulez-vous vraiment vider les garderies ?"))this.form.action="{{ route("garderies.clear") }}"'>Vider</button>
                    </form>
                </td>
            </tr>
            @foreach ($garderies as $garderie)
                <tr>
                    <td>{{ $garderie->Nom }}</td>
                    <td>{{ $garderie->Adresse }}</td>
                    <td>{{ $garderie->Ville }}</td>
                    <td>{{ $provinces[$garderie->id_province - 1]->description  }}</td>
                    <td>{{ $garderie->Telephone }}</td>
                    <td>
                        <form method='put'>
                            <button class='btn btn-primary' onclick="this.form.action='{{ route('garderies.edit',['id' => $garderie -> id])}}'">Modifier</button>
                        </form>
                    </td>
                    <td>
                        <form method='POST'>
                            @csrf
                            @method('DELETE')
                            <button class='btn btn-danger' onclick='if(confirm("Voulez-vous vraiment supprimer la garderie ?"))this.form.action="{{ route("garderies.delete",["id" => $garderie -> id])}}"'>Supprimer</button>
                        </form>
                    </td>
                </tr>
                
            @endforeach
        </table>
        
            
            <br>
            
    @else
        <span>Aucune garderie pour le moment</span>
    @endif
    <h1>Créer une garderie</h1>
            <form method='POST' action='{{route('garderies.ajouter')}}'>
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
                            <select class='border-gray-600 border-2' name="id_province">
                                @foreach($provinces as $province)
                                    <option value="{{$province->id}}">{{$province->description}}</option>
                                @endforeach
                            </select>
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
                

                <button type='submit' class='btn btn-success'>Créer une garderie</button>


            </form>
        
@endsection