<?php

namespace App\Http\Livewire\Pages;

use App\Models\Product as ModelsProduct;
use Illuminate\Support\Facades\Blade;
use Livewire\Component;

class Product extends Component
{

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
        //  dd($details);
        return redirect()->route('product.detail',['id' => $id])->with(['products' => $products]);
    }

    // public function orderProduct($mealID)
    // {
    //     if (!(auth()->check())) {
    //     notyf()->addInfo('Please register as a member before ordering.');
    //     } else if (auth()->user()->userRole == 'Member' || auth()->user()->userRole== 'Caregiver') {
    //     return redirect()->route('mealDetail', ['mealID' => $mealID]);
    //     } else {
    //     notyf()->addInfo('Only member or caregiver could order the meals.');
    //     }
    // }

    public function render()
    {
        $this->products = ModelsProduct::orderBy('id')->get();
        return view('livewire.pages.product')->layout('layouts.base', ['title' => 'Jumpstart - Product']);
    }
}
