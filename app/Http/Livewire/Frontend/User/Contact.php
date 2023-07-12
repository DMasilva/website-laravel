<?php

namespace App\Http\Livewire\Frontend\User;

use Livewire\Component;

class Contact extends Component
{

    public $pageTitle = 'Contact Us';
    public function render()
    {
        // dd("contact");
        return view('livewire.frontend.user.contact')->layout('frontend.layouts.user.app');
    }
}
