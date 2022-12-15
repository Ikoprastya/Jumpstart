<?php

namespace App\Http\Livewire\Pages\Admin;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ManageUser extends Component
{
    public $users;

    public function destroy($id){
        $user = User::find($id);

        if ($id) {
            $user->delete();
        }

        session()->flash('message', "Data has been deleted.");

        return redirect()->back();

    }
    

    public function render()
    {
        $this->users = User::orderBy('roles')->get( );
        // dd($users);
        return view('livewire.pages.admin.manage-user')->layout('layouts.base', ['title' => 'Jumpstart - Manage User']);
    }
}
