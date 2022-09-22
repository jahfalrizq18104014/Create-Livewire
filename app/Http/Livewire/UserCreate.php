<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class UserCreate extends Component
{
    public $name;
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.user-create');
    }
    public function store()
    {
        
        $this->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        User::create([
            'name' => $this-> name,
            'email' => $this-> email,
            'password' => Hash::make($this->password) 
        ]);

        session()->flash('success','User berhasil dibuat');

    }
}
