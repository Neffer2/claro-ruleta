<?php

namespace App\Http\Livewire\Game;

use Livewire\Component;
use App\Models\Registrado;

class Index extends Component
{
    // Listeners
    protected $listeners = ['signalStore' => 'store'];

    // Useful vars
    public $document;

    public function render()
    {
        return view('livewire.game.index');
    }

    public function mount($document){
        $this->document = $document;
        $registrado = Registrado::select('premio')->where('documento', $document)->first();
        if (is_null($registrado->premio)){
            // Juega
        }else{
            return redirect()->route('/');
        }
    }
 
    public function store($premio){
        // $registrado = Registrado::where('documento', $this->document)->first();
        // $registrado->premio = $premio;
        // $registrado->update();
        
        // return redirect()->route('/');
    }
}
