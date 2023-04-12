<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component; 
use App\Models\Registrado;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;

class Registro extends Component
{
    // Models
    public $nombre;
    public $documento;
    public $email;
    public $tel;

    // Usuful vars

    public function render()
    {
        return view('livewire.admin.registro');
    }
 
    public function updatedNombre(){ 
        $this->validate([
            'nombre' => 'required|string'
        ]);
    }

    public function updatedDocumento(){
        $this->validate(['documento' => ['required', 'numeric', 'unique:registrados,documento']]);
    }

    public function updatedEmail(){
        $this->validate(['email' => ['required', 'email', 'unique:registrados,email']]);
    }

    public function updatedTel(){
        $this->validate([
            'tel' => 'required|numeric'
        ]);
    } 

    public function registrar(){
        $this->validate([
            'nombre' => 'required|string',
            'documento' => 'required|unique:registrados|numeric',
            'email' => 'required|unique:registrados|email',
            'tel' => 'required|numeric'
        ]); 
        
        $registrado = new Registrado;
        $registrado->name = $this->nombre;
        $registrado->email = $this->email;
        $registrado->telefono = $this->tel;
        $registrado->documento = $this->documento;
        $registrado->save();

        // Redireccionar
        // $this->limpiar();
        return redirect()->route('game', ['document' => $this->documento]);
    }

    public function limpiar(){
        $this->nombre = "";
        $this->documento = "";
        $this->email = "";
        $this->tel = "";
    }
}
