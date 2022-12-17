<?php

namespace App\Http\Livewire\Pages\User;

use App\Models\Profile;
use Livewire\Component;

class UserProfile extends Component
{

    public $postId;
    public $title;
    public $content;

    public function mount($id)
    {
        $profile = Profile::find($id);
        
        if($profile) {
            $this->title    = $profile->title;
            $this->content  = $profile->content;
        }
    }

    public function update()
    {
        $this->validate([
            'title'   => 'required',
            'content' => 'required',
        ]);

        if($this->postId) {

            $post = Post::find($this->postId);
            
            if($post) {
                $post->update([
                    'title'     => $this->title,
                    'content'   => $this->content
                ]);
            }
        }

        //flash message
        session()->flash('message', 'Data Berhasil Diupdate.');

        //redirect
        return redirect()->route('post.index');
    }

    public function render()
    {
        return view('livewire.pages.user.user-profile')->layout('layouts.base', ['title' => 'Jumpstart - User Profile']);
    }
}
