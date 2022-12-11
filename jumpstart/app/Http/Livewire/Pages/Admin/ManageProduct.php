<?php

namespace App\Http\Livewire\Pages\Admin;

use Livewire\Component;

class ManageProduct extends Component
{
    public function render()
    {
        return view('livewire.pages.admin.manage-product')->layout('layouts.base', ['title' => 'Jumpstart - Manage Product']);
    }
}
