<?php

namespace App\Http\Livewire\Pages\Order;

use Livewire\Component;

class OrderDetail extends Component
{
    public function render()
    {
        return view('livewire.pages.order.order-detail')->layout('layouts.base', ['title' => 'Jumpstart - Order Detail']);
    }
}
