<?php 

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

use function Laravel\Prompts\alert;
use function Laravel\Prompts\confirm;
use App\Models\Garderie;

    class GarderieController extends Controller
    {
        public function index()
        {
            $garderies = Garderie::all();
            return view('garderies')->with('garderies', $garderies);
        }

        public function show($id)
        {

            $garderie = Garderie::findOrFail($id);
           

            return view('garderie',['garderie' => $garderie]);
            
        }

       

        public function create()
        {

            return view('form');
        }

        public function store(Request $request)
        {
            
            Garderie::create([
                'nom' => $request->nom,
                'adresse' => $request->adresse,
                'ville' => $request->ville,
                'province' => $request->province,
                'telephone' => $request->telephone
            ]);
            return redirect()->route('welcome');
        }

        public function FormModifier($idGarderie)
        {
            $garderie = Garderie::findOrFail($idGarderie);
            return view('formModifier')->with('garderie',$garderie);
        }

        public function update(Request $request, $idGarderie)
        {
            $garderie = Garderie::findOrFail($idGarderie);
            $garderie->update([
                'nom' => $request->nom,
                'adresse' => $request->adresse,
                'ville' => $request->ville,
                'province' => $request->province,
                'telephone' => $request->telephone
            ]); 
        
            return redirect()->route('welcome');
        }

        public function supprimer($idGarderie)
        {
                $garderie = Garderie::findOrFail($idGarderie);
                $garderie->delete();
                return redirect()->route('welcome');            
        }
    }

    
?>