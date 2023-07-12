<?php

namespace App\Http\Livewire\Frontend\User;

use Livewire\Component;
use Tabuna\Breadcrumbs\Breadcrumbs as BreadcrumbTrail;

class Breadcrumbs extends Component
{

    public $breadcrumbs;

    public function mount()
    {
        $this->breadcrumbs = BreadcrumbTrail::current();
    }

    public function render()
    {
        return view('frontend.includes.partials.breadcrumbs');
    }
}
