<?php

namespace App\Http\Livewire\Pages\User;

use App\Models\Profile;
use App\Models\Profiles;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserProfile extends Component
{

    public $phone;
    public $birthday;
    public $gender;
    public $address;
    public $country;

    // public function mount($id)
    // {
    //     $profile = User::find($id);

    //     if($profile) {
    //         $this->title    = $profile->title;
    //         $this->content  = $profile->content;
    //     }
    // }

    public function update()
    {

        // $profile = User::find(auth()->user()->id);

        $this->validate([
            'phone'     => 'required|numeric',
            'birthday'  => 'required|date',
            'gender'    => 'required',
            'address'   => 'required',
            'country'   => 'required',
        ]);

        if(auth()->user()->id) {

            $profile = User::find(auth()->user()->id);

            if($profile) {
                $profile->update([
                    'phone'       =>  $this->title,
                    'birthday'    =>  $this->title,
                    'gender'      =>  $this->title,
                    'address'     =>  $this->title,
                    'country'     =>  $this->title,

                ]);
            }
        }

        //flash message
        session()->flash('message', 'Profile has been updated.');

        //redirect
        return redirect()->back();
    }

    public function render()
    {


        return view('livewire.pages.user.user-profile')->layout('layouts.base', ['title' => 'Jumpstart - User Profile']);
    }
}
