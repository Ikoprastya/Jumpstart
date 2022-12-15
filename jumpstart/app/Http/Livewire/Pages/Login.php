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

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password, 'roles' => 'USER'])) {
            session()->regenerate();
            return redirect()->route('home');
        } else {
            session()->flash('error', 'Alamat Email atau Password Anda salah!.');
            return redirect()->route('login');

        }

    }



    public function render()
    {
        return view('livewire.pages.login')->layout('layouts.base', ['title' => 'Jumpstart - Login']);
    }
}
