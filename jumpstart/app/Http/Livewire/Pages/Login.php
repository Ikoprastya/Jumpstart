<?php

namespace App\Http\Livewire\Pages;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email;
    public $password;

    public function login(){
        $this->validate([
            'email'     => 'required|email',
            'password'  => 'required'
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password, 'role' => 'USER']) || Auth::attempt(['email' => $this->email, 'password' => $this->password, 'role' => 'ADMIN'])) {
            session()->regenerate();
            return redirect()->route('home');
        }  else {
            session()->flash('error', 'Email and password is invalid!');
            return redirect()->route('login');

        }

    }




    public function render()
    {
        return view('livewire.pages.login')->layout('layouts.base', ['title' => 'Jumpstart - Login']);
    }
}
