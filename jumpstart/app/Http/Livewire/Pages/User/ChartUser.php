<?php

namespace App\Http\Livewire\Pages\User;

use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Blade;
use Livewire\Component;

class ChartUser extends Component
{

    public $chartValue;
    public $productID, $userID;
    public $dateNow;
    public $orders;
    public $checkNull;
    public $orderHistory;




    public function plus($id){

        $amount = Order::where('id', $id)->first();

        $amount->orderAmount++;
        $amount->save();

    }

    public function minus($id){
        $amount = Order::where('id', $id)->first();

        $amount->orderAmount--;
        $amount->save();
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

    public function checkOut($id)
    {

        return redirect()->route('order.detail', ['id' => $id]);
    }

    public function destroy($id){
        $order = Order::find($id);

        if ($id) {
            $order->delete();
        }

        return redirect()->back();

    }

    public function updateStatus($id){
        $order = Order::find($id);

        if ($id) {
            $order->update([
                'orderStatus' => "Received",
            ]);
        }

        return redirect()->back();

    }



    public function render()
    {

        $this->orders = auth()->user()->order()->where('orderNumberID', null)->get();
        $this->orderHistory = auth()->user()->order()->where('orderNumberID', '<>', '', 'and')->get();

        return view('livewire.pages.user.chart-user')->layout('layouts.base', ['title' => 'Jumpstart - Chart User']);
    }
}
