<?php

namespace App\Http\Livewire\Frontend\User;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.frontend.user.home')->layout('frontend.layouts.user.app');
    }
}
