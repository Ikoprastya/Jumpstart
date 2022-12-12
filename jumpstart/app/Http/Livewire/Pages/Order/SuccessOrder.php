<?php

namespace App\Http\Livewire\Pages\Order;

use Livewire\Component;

class SuccessOrder extends Component
{
    public function render()
    {
        return view('livewire.pages.order.success-order')->layout('layouts.base', ['title' => 'Jumpstart - Order Success']);
    }
}
