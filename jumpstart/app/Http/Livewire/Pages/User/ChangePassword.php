<?php

namespace App\Http\Livewire\Pages\User;

use Livewire\Component;

class ChangePassword extends Component
{
    public function render()
    {
        return view('livewire.pages.user.change-password')->layout('layouts.base', ['title' => 'Jumpstart - User Change Password']);
    }
}
