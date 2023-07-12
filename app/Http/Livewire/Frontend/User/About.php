<?php

namespace App\Http\Livewire\Frontend\User;

use Livewire\Component;

class About extends Component
{

    public $pageTitle = 'About Us';

    public function render()
    {
        return view('livewire.frontend.user.about')->layout('frontend.layouts.user.app');
    }
}
