<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('livewire.pages.login')->layout('layouts.base', ['title' => 'Jumpstart - Login']);
    }
}
