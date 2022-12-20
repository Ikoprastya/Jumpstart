<?php

namespace App\Http\Livewire\Pages\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithFileUploads;

class ManageProduct extends Component
{
    use WithFileUploads;

    public $products;
    public $name;
    public $price;
    public $poster;
    public $amount;
    public $description;



    public function store(Request $request){
        $this->validate([
            'name'           => 'required',
            'price'          => 'required|numeric',
            'poster'         => 'required|image|mimes:jpeg,jpg,png,svg|max:3000',
            'amount'         => 'required|numeric',
            'description'    => 'required'

        ]);

        $file = $this->poster->store('product','public');


        $product = Product::create([
            'name'         => $this->name,
            'price'        => $this->price,
            'poster'       => $file,
            'amount'       => $this->amount,
            'description'  => $this->description,

        ]);

        if ($product) {
            session()->flash('success', 'Success adding new product');
            $this->reset();
            return redirect()->to('/admin/manage/product/#data');
        }

    }

    public function destroy($id){
        $product = Product::find($id);

        if ($id) {
            $product->delete();
        }

        session()->flash('message', "Data has been deleted.");

        return redirect()->back();

    }

    public function render()
    {
        $this->products = Product::orderBy('id')->get( );
        return view('livewire.pages.admin.manage-product')->layout('layouts.base', ['title' => 'Jumpstart - Manage Product']);
    }
}
