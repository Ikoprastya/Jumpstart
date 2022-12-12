<?php

namespace App\Http\Livewire\Pages\Product;

use Livewire\Component;

class ProductDetail extends Component
{
    public function render()
    {
        return view('livewire.pages.product.product-detail')->layout('layouts.base', ['title' => 'Jumpstart - Product Detail']);
    }
}
