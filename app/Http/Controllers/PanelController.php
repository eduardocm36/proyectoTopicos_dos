<?php

namespace App\Http\Controllers;

use App\Models\Panel;
use Illuminate\Support\Str;
use Exception;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    

    public function add_panel(Request $request){

        $request->validate([
            'nombre'=>'required|max:255',
            'tipo'=>'required|integer',
        ]);

        try{
            //creamos el panel
            $panel= new Panel();
            $panel->nombre=$request->nombre;
            $panel->codigo=strtolower(Str::random(5));
            $panel->user_id=$request->user()->id; //creador del panel
            $panel->tipo=$request->tipo;
            $panel->save();

            return response()->json(['message'=>'panel creado'], 200);
        }catch(Exception $e){
            return response()->json(['message'=>'error',$e->getMessage()],405);
        }
    }

  
}
