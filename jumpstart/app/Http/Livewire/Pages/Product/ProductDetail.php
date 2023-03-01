<?php

namespace App\Http\Livewire\Pages\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Blade;
use Livewire\Component;

class ProductDetail extends Component
{
    public $productID;

    public $name;
    public $price;
    public $poster;
    public $amount;
    public $description;

    public $isOpen = 0;

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function cancel()
    {
      $this->isOpen = false;
    }


    public function mount(){

          $this->productID = \Route::current()->parameter('id');


    }

    public function boot()
    {
      Blade::directive('money', function ($amount) {
        return "<?php echo number_format($amount, 2); ?>";
      });

      Blade::directive('amount', function ($amount) {
          return "<?php echo number_format($amount); ?>";
        });
    }

    public function edit($id)
    {
        $post = Product::findOrFail($id);
        $this->productID = $id;
        $this->name = $post->name;
        $this->price = $post->price;
        $this->poster = $post->poster;
        $this->amount = $post->amount;
        $this->description = $post->description;

        $this->openModal();
    }

    public function update()
    {
        $this->validate([
            'name'           => 'required',
            'price'          => 'required|numeric',
            'amount'         => 'required|numeric',
            'description'    => 'required'

        ]);

      Product::updateOrCreate(['id' => $this->productID], [
        'name'         => $this->name,
        'price'        => $this->price,
        'amount'       => $this->amount,
        'description'  => $this->description,
      ]);

      $this->closeModal();
    }

     public function render()
    {

        $product =  Product::where('id', $this->productID)->first();

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
