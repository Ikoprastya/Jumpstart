<?php

namespace App\Http\Livewire\Pages\Order;

use Illuminate\Support\Str;
use Livewire\Component;

class SuccessOrder extends Component
{
    public $code;


    public function render()
    {
        $this->code = Str::random(5);
        dd($this->code);
        return view('livewire.pages.order.success-order')->layout('layouts.base', ['title' => 'Jumpstart - Order Success']);
    }
}
