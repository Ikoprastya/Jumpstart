<?php

namespace App\Http\Livewire\Pages\User;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserProfile extends Component
{
    use WithFileUploads;

    public $phone;
    public $address;
    public $country;
    public $poster;


    public function update(Request $request, $user)
    {

        $user_id = User::findOrFail($user);
        $user_id -> update([
            'phone'     => $request->phone,
            'address'   => $request->address ,
            'country'   => $request->country ,
        ]);


        if ($user_id) {
            session()->flash('success', 'Success Update Profile');
            return back();
        }
    }



    public function upload(){

        $user_id = User::where('id', Auth::user()->id)->first();

        $this->validate([
            'poster' => 'image|max:1024', // 1MB Max
        ]);

        $file  = $this->poster->store('poster', 'public');
        // $file = $url -> poster;


        $user_id -> update([
            'poster'     => $file,
        ]);

        if ($user_id) {

            return back();
        }
    }



    public function render()
    {


        return view('livewire.pages.user.user-profile')->layout('layouts.base', ['title' => 'Jumpstart - User Profile']);
    }
}
