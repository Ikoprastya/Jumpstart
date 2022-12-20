<?php

namespace App\Http\Livewire\Pages\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Blade;
use Livewire\Component;

class ProductDetail extends Component
{
    public $name;
    public $price;
    public $poster;
    public $amount;
    public $description;

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

        $product = session('products');

        // $product = Product::find($productsID);

        $this->name         = $product->name;
        $this->price        = $product->price;
        $this->poster       = $product->poster;
        $this->amount       = $product->amount;
        $this->description  = $product->description;

        // dd($product);


        return view('livewire.pages.product.product-detail')->layout('layouts.base', ['title' => 'Jumpstart - Product Detail']);
    }
}
