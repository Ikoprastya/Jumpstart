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

    public $productID;



    public function store(Request $request)
    {
        $this->validate([
            'name'           => 'required',
            'price'          => 'required|numeric',
            'poster'         => 'required|image|mimes:jpeg,jpg,png,svg|max:3000',
            'amount'         => 'required|numeric',
            'description'    => 'required'

        ]);

        $file = $this->poster->store('product', 'public');


        $product = Product::create([
            'name'         => $this->name,
            'price'        => $this->price,
            'poster'       => $file,
            'amount'       => $this->amount,
            'description'  => $this->description,

        ]);

        if ($product) {
            session()->flash('success', 'Success adding new product');
            $this->resetInput();
            return redirect()->to('/admin/manage/product/#data');
        }
    }

    public function showDetails($id)
    {
        $products = Product::where('id', $id)->first();
        return redirect()->route('product.detail', ['id' => $id])->with(['products' => $products]);
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if ($id) {
            $product->delete();
        }

        session()->flash('message', "Data has been deleted.");

        return redirect()->back();
    }

    private function resetInput()
    {
        $this->name = null;
        $this->price = null;
        $this->poster = null;
        $this->amount = null;
        $this->description = null;
    }


    public function render()
    {
        $this->products = Product::orderBy('id')->get();
        return view('livewire.pages.admin.manage-product')->layout('layouts.base', ['title' => 'Jumpstart - Manage Product']);
    }
}
