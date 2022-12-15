<?php

namespace App\Http\Livewire\Pages\Admin;

use App\Models\Product;
use Livewire\Component;

class ManageProduct extends Component
{

    public $products;


    public function render()
    {
        $this->products = Product::all();
        return view('livewire.pages.admin.manage-product')->layout('layouts.base', ['title' => 'Jumpstart - Manage Product']);
    }
}
