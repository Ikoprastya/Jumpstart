<?php

namespace App\Http\Livewire\Pages\Product;

use Livewire\Component;

class ProductUpdate extends Component
{
    public function render()
    {
        return view('livewire.pages.product.product-update')->layout('layouts.base', ['title' => 'Jumpstart - Product Update']);
    }
}
