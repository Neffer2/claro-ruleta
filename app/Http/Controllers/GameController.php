<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registrado;

class GameController extends Controller
{
    public function index($document){
        $registrado = Registrado::select('premio')->where('documento', $document)->first();
        if (is_null($registrado->premio)){
            // Juega
            return view('game', ['document' => $document]);
        }else{
            return redirect()->route('/');
        }
    }
} 
