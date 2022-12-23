<?php

namespace App\Http\Livewire\Pages\Order;

use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Shipment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Str;
use Livewire\Component;

class OrderDetail extends Component
{

    public $orderID, $userID, $dateNow;
    public $orderNote;
    public $goSend, $jne, $personalCourier;
    public $cod, $card;
    public $order, $user;
    public $orderNumberID;


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

        $orderAmount     = $order_id->orderAmount;
        $orderPrice      = $order_id->getProduct->price * $orderAmount;
        $orderShipment   = $order_id->getShipment->price;
        $orderTotal      = $orderShipment + $orderPrice;
        // dd($orderTotal);

        $this->orderNumberID = $order_id->orderNumberID = Str::random(5);

        $id_product = Order::where('id', $this->orderID)->first()->getProduct->id;
        $amount = Order::where('id', $this->orderID)->first()->getProduct->amount;

        $saveAmount = $amount - $orderAmount;

        Product::where('id', $id_product)->update([
            'amount' => $saveAmount
        ]);

        $order_id -> update([
            'orderNote'         => $this->orderNote,
            'paymentHistory'    => $orderTotal,
            'orderStatus'       => "Need Verify",
            'orderNumberID'     => $this->orderNumberID,

        ]);


        return redirect()->route('order.seccess', ['id' => $this->orderID]);
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
