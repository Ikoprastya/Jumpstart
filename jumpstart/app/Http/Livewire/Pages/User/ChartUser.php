<?php

namespace App\Http\Livewire\Pages\User;

use App\Models\Order;
use Carbon\Carbon;
use Livewire\Component;

class ChartUser extends Component
{

    public $chartValue;
    public $productID, $userID;
    public $dateNow;
    public $orders;



    public function plus(){
        $this->chartValue++ ;
    }

    public function minus(){
        $this->chartValue-- ;
    }

    // public function mount()
    // {
    //   $this->productID = \Route::current()->parameter('id');
    //   $this->userID = auth()->user()->userID;
    //   $this->dateNow = Carbon::now()->toDateTimeString();
    // }

    // public function createOrder()
    // {

    //     $order = Order::create([
    //         'userID'        => $this->userID,
    //         'productID'     => $this->productID,
    //         'orderAmount'   => $this->chartValue,
    //         'orderDateTime' => $this->dateNow,
    //         'orderStatus'   => 'On Chart',
    //     ]);

    //     notify()->success('Order have been placed successfully.');
    //     return redirect()->route('mealStatus', ['orderID' => $order->orderID]);
    // }


    public function render()
    {

        // $order = Order::all();
        $this->orders = Order::where('userID', auth()->user()->id)->get();
        return view('livewire.pages.user.chart-user')->layout('layouts.base', ['title' => 'Jumpstart - Chart User']);
    }
}
