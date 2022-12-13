<?php

namespace App\Http\Livewire\Pages\Admin;

use Livewire\Component;

class ManageTransaction extends Component
{
    public function render()
    {
        return view('livewire.pages.admin.manage-transaction')->layout('layouts.base', ['title' => 'Jumpstart - Manage Transaction']);
    }
}
