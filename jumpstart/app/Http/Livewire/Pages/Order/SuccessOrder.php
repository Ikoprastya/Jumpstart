<?php

namespace App\Http\Livewire\Pages\Order;

use App\Models\Order;
use Illuminate\Support\Str;
use Livewire\Component;

class SuccessOrder extends Component
{

    public $orderID;
    public $order;

    public function mount()
    {
      $this->orderID = \Route::current()->parameter('id');
    }

    public function render()
    {
        $this->order = Order::FirstWhere('id', $this->orderID);
        return view('livewire.pages.order.success-order')->layout('layouts.base', ['title' => 'Jumpstart - Order Success']);
    }
}
