<?php

namespace App\Livewire;

use App\Models\Producto;
use App\Models\User;
use Livewire\Component;

class BuscarUsuarios extends Component
{
    public $usuarios;
    public $productos;

    public function mount()
    {
        $this->usuarios = User::all();
        $this->productos = Producto::all();
    }
    
    public function render()
    {
        return view('livewire.buscar-usuarios');
    }
}
