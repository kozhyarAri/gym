<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public function logout(){
        Auth::logout();
        redirect(route('login'));
    }
    public function render()
    {
        return view('livewire.dashboard')->extends('layouts.app')->section('content');
    }
}
