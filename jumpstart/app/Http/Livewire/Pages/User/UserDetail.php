<?php

namespace App\Http\Livewire\Pages\User;

use Livewire\Component;

class UserDetail extends Component
{
    public function render()
    {
        return view('livewire.pages.user.user-detail')->layout('layouts.base', ['title' => 'Jumpstart - User Detail']);
    }
}
