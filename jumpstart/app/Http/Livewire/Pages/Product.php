<?php

namespace App\Http\Livewire\Pages;

use App\Models\Order;
use App\Models\Product as ModelsProduct;
use Carbon\Carbon;
use Illuminate\Support\Facades\Blade;
use Livewire\Component;

class Product extends Component
{

    Public $productID, $userID, $dateNow;

    public function boot()
    {
        Blade::directive('money', function ($amount) {
        return "<?php echo number_format($amount, 2); ?>";
        });

        Blade::directive('amount', function ($amount) {
            return "<?php echo number_format($amount); ?>";
        });
    }

    public function showDetails($id)
    {
        $products = ModelsProduct::where('id', $id)->first();
        return redirect()->route('product.detail',['id' => $id])->with(['products' => $products]);
    }



    public function orderProduct($id)
    {
        if (!(auth()->check())) {
            notify()->error('Please complate your profile.');
            return redirect() -> route('user.profile');
        } else if (auth()->user()->phone && auth()->user()->country && auth()->user()->address) {


            $this->userID = auth()->user()->id;
            $this->productID = ModelsProduct::FirstWhere('id', $id)->id;
            $this->dateNow = Carbon::now()->toDateTimeString();

            // $ourderExstst = auth()->user()->order()->where('productID', $id)->exists();
            // dd($ourderExstst);

            $order = Order::create([
                'userID'        => $this->userID,
                'productID'     => $this->productID,
                'orderDateTime' => $this->dateNow,
                'orderAmount'   => 0,
                'orderStatus'   => 'On Chart',
            ]);

            notify()->success('Order have been placed on chart.');
            return redirect() -> route('user.order', ['id' => $id]);
        } else {
            notify()->error('Please complate your profile.');
            return redirect() -> route('user.profile');

        }
    }

    public function render()
    {
        $this->products = ModelsProduct::orderBy('id')->get();
        return view('livewire.pages.product')->layout('layouts.base', ['title' => 'Jumpstart - Product']);
    }
}
