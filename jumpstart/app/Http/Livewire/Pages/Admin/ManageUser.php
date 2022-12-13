<?php

namespace App\Http\Livewire\Pages\Admin;

use Livewire\Component;

class ManageUser extends Component
{
    public function render()
    {
        return view('livewire.pages.admin.manage-user')->layout('layouts.base', ['title' => 'Jumpstart - Manage User']);
    }
}
