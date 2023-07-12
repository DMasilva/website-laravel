<?php

use App\Http\Livewire\Frontend\User\Home;
use App\Http\Livewire\Frontend\User\About;
use App\Http\Livewire\Frontend\User\Contact;
use App\Http\Livewire\Frontend\User\RequestDemo;
use Illuminate\Support\Facades\Route;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/contact-us', Contact::class)->name('contact');
Route::get('/request-a-demo', RequestDemo::class)->name('requestdemo');
Route::post('/request-a-demo', RequestDemo::class)->name('requestdemo.post');


