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
    public $ciudad;
    public $id_evento;    

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

    public function updatedCiudad(){
        $this->validate(['ciudad' => ['required', 'string']]);

    }

    public function updatedIdEvento(){
        $this->validate(['id_evento' => ['required', 'numeric']]);
    }
 
    protected $messages = [
        'email.required' => 'Éste campo es obligatorio.',
        'email.email' => 'Formato de correo electrónico no válido.',
        'email.unique' => 'Ésta direccion de correo electrónico ya fué registrada.',

        'documento.required' => 'Éste campo es obligatorio.',
        'documento.numeric' => 'Éste campo debe contener únicamente números.',
        'documento.unique' => 'Éste número de documento ya fué registrado.',

        'ciudad.required' => 'Éste campo es obligatorio.',

        'nombre.required' => 'Éste campo es obligatorio.',
        'tel.required' => 'Éste campo es obligatorio.',

        'id_evento.required' => 'Éste campo es obligatorio.',
        'id_evento.numeric' => 'Éste campo debe contener únicamente números.',
    ];

    public function updatedTel(){
        $this->validate([
            'tel' => 'required|numeric'
        ]);
    } 

    public function registrar(){
        $this->validate([
            'nombre' => 'required|string',
            'documento' => 'required|unique:registrados|numeric',
            'ciudad' => 'required|string',
            'email' => 'required|unique:registrados|email',
            'tel' => 'required|numeric',
            'id_evento' => 'required|numeric'
        ]); 
        
        $registrado = new Registrado;
        $registrado->name = $this->nombre;
        $registrado->email = $this->email;
        $registrado->telefono = $this->tel;
        $registrado->ciudad = $this->ciudad;
        $registrado->documento = $this->documento;
        $registrado->id_evento = $this->id_evento;
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
        $this->id_evento = "";
    }
}
