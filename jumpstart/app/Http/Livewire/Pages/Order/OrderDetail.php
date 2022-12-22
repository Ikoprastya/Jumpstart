<?php

namespace App\Http\Livewire\Pages\Order;

use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Shipment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Blade;
use Livewire\Component;

class OrderDetail extends Component
{

    public $orderID, $userID, $dateNow;
    public $orderNote;
    public $goSend, $jne, $personalCourier;
    public $cod, $card;
    public $order, $user;

    public $styleClick = "border-solid border-2 border-green-400 h-[100px] w-auto flex flex-col items-center justify-center text-md font-bold text-green-400 dark:text-white bg-green-100";

    public function mount()
    {
      $this->orderID = \Route::current()->parameter('id');
      $this->userID = auth()->user()->id;
      $this->dateNow = Carbon::now()->toDateTimeString();
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

    public function selectShipment($id){

        $amount = Order::where('id', $this->orderID)->first();

        $amount->shipmentID = $id;
        $amount->save();

    }

    public function selectPayment($id){

        $amount = Order::where('id', $this->orderID)->first();

        $amount->paymentID = $id;
        $amount->save();

    }


    public function rules()
    {
      return [
        'orderNote' => ['string', 'max:500'],
      ];
    }

    public function codPayment()
    {

        $order_id = Order::FirstWhere('id', $this->orderID);
        $order_id -> update([
            'orderNote'  => $this->orderNote,

        ]);

        return redirect()->route('order.seccess');
    }


    public function render()
    {
        $this->goSend = Shipment::FirstWhere('id', 1);
        $this->jne = Shipment::FirstWhere('id', 2);
        $this->personalCourier = Shipment::FirstWhere('id', 3);

        $this->cod = Payment::FirstWhere('id', 1);
        $this->card = Payment::FirstWhere('id', 2);


        $this->order = Order::FirstWhere('id', $this->orderID);
        return view('livewire.pages.order.order-detail')->layout('layouts.base', ['title' => 'Jumpstart - Order Detail']);
    }
}
