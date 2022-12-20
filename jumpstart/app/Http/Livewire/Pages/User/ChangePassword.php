<?php

namespace App\Http\Livewire\Pages\User;

use Livewire\Component;

class ChangePassword extends Component
{

    // public function resetPassword(Request $request, $id)
    // {
    //     $validated = $request->validate([
    //         'email_address' =>  'required|email',
    //         'new_password'  =>  'required|min:5'
    //     ]);

    //     $user_id = User::findOrFail($id);
    //     $retype = $user_id->email;
    //     $email = $request->email_address;

    //     $user = User::where('email', $email)->first();

    //     if ($user == null) {
    //         return back()->with('failed', 'User with the email address not found!');
    //     } elseif ($retype != $email) {
    //         return back()->with('failed', 'Email is not the same as what is listed!');
    //     } else {
    //         $user->password = bcrypt($request->new_password);
    //         $user->update();
    //         notify()->success('Password Updated', 'Success');
    //         return back();
    //     }

    // }

    public function render()
    {
        return view('livewire.pages.user.change-password')->layout('layouts.base', ['title' => 'Jumpstart - User Change Password']);
    }
}
