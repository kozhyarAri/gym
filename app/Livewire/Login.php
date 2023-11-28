<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public function mount(){
        if(Auth::check()){
            redirect(route('admin.dashboard'));
        }
    }

    public $email='',$password='';

    public function submit(){
        $this->validate([
            'email'=>'required|email|max:50',
            'password'=>'required|max:50',
        ]);
        if (Auth::attempt(['email'=>$this->email,'password'=>$this->password])) {
            redirect(route('admin.dashboard'));
        }else{
            session()->flash('invalid','زانیاریەکان هەڵەیە');
        }
    }

    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.auth')->section('content');
    }
}
