<?php

namespace App\Http\Livewire\Pages\User;

use Livewire\Component;

class ChartUser extends Component
{

    public $chartValue;

    public function plus(){
        $this->chartValue++ ;
    }

    public function minus(){
        $this->chartValue-- ;
    }



    public function render()
    {
        return view('livewire.pages.user.chart-user')->layout('layouts.base', ['title' => 'Jumpstart - Chart User']);
    }
}
