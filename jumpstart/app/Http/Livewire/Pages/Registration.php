<?php

namespace App\Http\Livewire\Pages;

use App\Models\User;
use Livewire\Component;

class Registration extends Component
{

    public $name;
    public $email;
    public $password;
    public $confirm_password;

    public function store(){
        $this->validate([
            'name'      => 'required',
            'email'     => 'required|email|unique:users',
            'password'  => 'required',
            'confirm_password'  => 'required|same:password'
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'role' => 'USER'
        ]);

        if ($user) {
            session()->flash('success', 'Success Registration');
            return redirect()->route('login');
        }

    }

    public function render()
    {
        return view('livewire.pages.registration')->layout('layouts.base', ['title' => 'Jumpstart - Registration']);
    }
}
