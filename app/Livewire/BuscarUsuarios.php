<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class BuscarUsuarios extends Component
{
    public $usuarios;

    public function mount()
    {
        $this->usuarios = User::all();
    }
    
    public function render()
    {
        return view('livewire.buscar-usuarios');
    }
}
