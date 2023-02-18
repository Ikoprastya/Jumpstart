<?php

namespace App\Http\Livewire\Pages;

use App\Models\Product;
use Illuminate\Support\Facades\Blade;
use Livewire\Component;

class Home extends Component
{
    public $products;

    public function boot()
    {
        Blade::directive('money', function ($amount) {
        return "<?php echo number_format($amount, 2); ?>";
        });

        Blade::directive('amount', function ($amount) {
            return "<?php echo number_format($amount); ?>";
        });
    }

    public function render()
    {
        $this->products = Product::orderBy('id')->limit(3)->get();
        return view('livewire.pages.home')->layout('layouts.base', ['title' => 'Jumpstart - Home']);
    }
}
