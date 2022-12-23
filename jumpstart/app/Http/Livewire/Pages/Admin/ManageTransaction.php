<?php

namespace App\Http\Livewire\Pages\Admin;

use App\Models\Order;
use Illuminate\Support\Facades\Blade;
use Livewire\Component;

class ManageTransaction extends Component
{

    public $transaction;

    public function boot()
    {
        Blade::directive('money', function ($amount) {
        return "<?php echo number_format($amount, 2); ?>";
        });

        Blade::directive('amount', function ($amount) {
            return "<?php echo number_format($amount); ?>";
        });
    }

    public function updateStatus($id){
        $order = Order::find($id);

        if ($id) {
            $order->update([
                'orderStatus' => "Being delivered",
            ]);
        }

        return redirect()->back();

    }

    public function render()
    {
        $this->transaction = Order::Where('orderNumberID', '<>', '', 'and')->get();
        return view('livewire.pages.admin.manage-transaction')->layout('layouts.base', ['title' => 'Jumpstart - Manage Transaction']);
    }
}
