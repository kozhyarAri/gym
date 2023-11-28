<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class AddUsers extends Component
{
    public $formRegister=[
        "name"=>'',
        "email"=>'',
        "password"=>'',
        "password_confirmation"=>'',
        "phone_number"=>'',
        "role"=>''
    ];

    public function submit(){
        $message=[
            "formRegister.name.required"=>"please write full name",
            "formRegister.email.required"=>"please write email",
            "formRegister.password.required"=>"please write password",
            "formRegister.role.required"=>"please select your role",
            "formRegister.phone_number.required"=>"please write your phone number",
            "formRegister.password.confirmed"=>"password does not match",
        ];
        $this->validate([
            "formRegister.name"=>"required|max:25",
            "formRegister.email"=>"required|unique:users,email|email|max:50",
            "formRegister.password"=>"required|confirmed|max:50",
            "formRegister.phone_number"=>"required|unique:users,phone_number|digits:11",
            "formRegister.role"=>"required"
        ],$message);

        User::create($this->formRegister);
        
        $this->formRegister=[
            "name"=>'',
            "email"=>'',
            "password"=>'',
            "password_confirmation"=>'',
            "phone_number"=>'',
            "role"=>'0'
        ];
        $this->dispatch('refreshShowUser');
    }

    public function render()
    {
        return view('livewire.admin.add-users')->extends('layouts.app')->section('content');
    }
}
