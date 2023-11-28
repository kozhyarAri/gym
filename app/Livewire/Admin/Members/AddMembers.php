<?php

namespace App\Livewire\Admin\Members;

use App\Models\Members;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddMembers extends Component
{
    // plan_id	user	first_name	last_name	email	gender	address	phone_number
    //	membership_status	card_num	expire_date	image
    public $formRegister = [
        "first_name" => '',
        "last_name" => '',
        "email" => '',
        "gender" => '',
        "phone_number" => '',
        "address" => '',
        "image" => '',
        "user_id" => '',
        "card_num" => '',
    ];

    public function submit()
    {
        $message = [
            "formRegister.first_name.required" => "please write first name",
            "formRegister.last_name.required" => "please write last name",
            "formRegister.email.required" => "please write email",
            "formRegister.gender.required" => "please select gender",
            "formRegister.address.required" => "please write the address",
            "formRegister.phone_number.required" => "please write your phone number",
            //"formRegister.image.required"=>"image does not match",
        ];
        $this->validate([
            "formRegister.first_name" => "required|max:25",
            "formRegister.last_name" => "required|max:25",
            "formRegister.email" => "required|unique:members,email|email|max:50",
            "formRegister.gender" => "required",
            "formRegister.phone_number" => "required|unique:members,phone_number|digits:11",
            //"formRegister.image"=>"required"
        ], $message);
        if ($this->formRegister['gender'] == 'male') {
            $this->formRegister['image'] = 'male.svg';
        } else {
            $this->formRegister['image'] = 'female.svg';
        }
        $this->formRegister['user_id'] = Auth::user()->id;
        do {
            $this->formRegister['card_num'] = rand(1000000, 99999999);
        } while (Members::where('card_num', $this->formRegister['card_num'])->exists());
        

        Members::create($this->formRegister);

        $this->formRegister = [
            "first_name" => '',
            "last_name" => '',
            "email" => '',
            "gender" => '',
            "phone_number" => '',
            "address" => '',
        ];
        //$this->dispatch('refreshShowUser');
    }

    public function render()
    {
        return view('livewire.admin.members.add-members')->extends('layouts.app')->section('content');
    }
}
