<?php

namespace App\Http\Livewire\Pages\User;

use Livewire\Component;

class ChartUser extends Component
{
    public function render()
    {
        return view('livewire.pages.user.chart-user')->layout('layouts.base', ['title' => 'Jumpstart - Chart User']);
    }
}
