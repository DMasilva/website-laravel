<?php

namespace App\Http\Livewire\Frontend\User;

use Livewire\Component;

class PageTitle extends Component
{

    public $pageTitle;

    public function render()
    {
        return view('livewire.frontend.user.page-title')->layout('frontend.layouts.user.app');
    }
}
