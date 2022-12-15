<?php

namespace App\Http\Livewire\Component;

use App\Http\Middleware\Roles;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Header extends Component
{

    public function logOut()
    {
      Auth::logout();

      session()->invalidate();
      session()->regenerateToken();

    //   notyf('Logout successful!');

      return redirect()->to('/');
    }

    public function render()
    {

        return view('livewire.component.header');
    }
}
