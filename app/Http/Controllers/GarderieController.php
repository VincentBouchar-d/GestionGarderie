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
            ]);
            return redirect()->route('welcome');
        }

        public function FormModifier($id)
        {
            $garderie = Garderie::findOrFail($id);
            return view('formModifier')->with('garderie',$garderie);
        }

        public function update(Request $request, $id)
        {
            $garderie = Garderie::findOrFail($id);
            $garderie->update([
                'nom' => $request->nom,
                'adresse' => $request->adresse,
                'ville' => $request->ville,
                'province' => $request->province,
            ]); 
        
            return redirect()->route('welcome');
        }

        public function supprimer($id)
        {
                $garderie = Garderie::findOrFail($id);
                $garderie->delete();
                return redirect()->route('welcome');            
        }
    }

    
?>