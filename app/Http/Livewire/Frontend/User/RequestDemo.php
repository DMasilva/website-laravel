<?php

namespace App\Http\Livewire\Frontend\User;

use Livewire\Component;

class RequestDemo extends Component
{

    public $pageTitle = 'Request a demo';

    public $name;
    public $email;
    public $phone;
    public $message;

    public function render()
    {
        return view('livewire.frontend.user.request-demo')->layout('frontend.layouts.user.app');
    }

    public function submitRequestDemo()
    {
        dd("Here");
        $this->validate();

        /* SupportIssue::create([
            'email' => $this->email,
            'bank_id' => $this->bank,
            'subject' => $this->subject,
            'comment' => $this->comment,
        ]);
        $this->reset(['email', 'bank', 'subject', 'comment']);
        session()->flash('success', 'Support Issue created successfully. We will get back to you asap.'); */
    }

    public function rules()
    {
        return [
            'email' => 'email',
            'name' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ];
    }
}
