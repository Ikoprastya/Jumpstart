<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Product extends Component
{
    public function render()
    {
        return view('livewire.pages.product')->layout('layouts.base', ['title' => 'Jumpstart - Product']);
    }
}
