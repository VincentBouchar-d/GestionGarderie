<?php 

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

use function Laravel\Prompts\alert;
use function Laravel\Prompts\confirm;
use App\Models\Garderie;
use App\Models\Province;

    class GarderieController extends Controller
    {
        public function index()
        {
            $garderies = Garderie::all();
            $provinces = Province::all();
            return view('garderies')->with('garderies', $garderies)->with('provinces', $provinces);
        }


        public function ajouter(Request $request)
        {
             
            Garderie::create([
                'Nom' => $request->nom,
                'Adresse' => $request->adresse,
                'Ville' => $request->ville,
                'id_province' => $request->id_province,
                'Telephone' => $request->telephone
            ]);
            return redirect()->route('welcome');
        }

        public function formulaireModifierGarderie($id)
        {
            $garderie = Garderie::findOrFail($id);
            $provinces = Province::all();
            
            return view('formModifier')->with('garderie',$garderie)->with('provinces', $provinces);
        }

        public function update(Request $request, $id)
        {
            $garderie = Garderie::findOrFail($id);
          
            
            $garderie->update([
                'Nom' => $request->Nom,
                'Adresse' => $request->Adresse,
                'Ville' => $request->Ville,
                'id_province' => $request->id_province,
                'Telephone' => $request->Telephone
            ]); 
        
            return redirect()->route('welcome');
        }

        public function delete($id)
        {
                $garderie = Garderie::findOrFail($id);
                $garderie->delete();
                return redirect()->route('welcome');            
        }

        public function vider()
        {
            $garderies = Garderie::all();
            foreach($garderies as $garderie)
            {
                $garderie->delete();
            }
            return redirect()->route('welcome');
        }
    }

    
?>