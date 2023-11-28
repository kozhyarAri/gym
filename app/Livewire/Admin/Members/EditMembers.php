<?php

namespace App\Livewire\Admin\Members;

use App\Models\Members;
use Livewire\Component;

class EditMembers extends Component
{

    public $member;
    public $formRegister = [];

    public function mount($id)
    {
        $this->member = Members::findOrFail($id);
        $this->formRegister = [
            "first_name" => $this->member->first_name,
            "user_id" => $this->member->user_id,
            "last_name" => $this->member->last_name,
            "email" => $this->member->email,
            "gender" => $this->member->gender,
            "phone_number" => $this->member->phone_number,
            "address" => $this->member->address,
            "card_num" => $this->member->card_num,
        ];
    }

    public function update()
    {
        $message = [
            "formRegister.first_name.required" => "please write first name",
            "formRegister.last_name.required" => "please write last name",
            "formRegister.email.required" => "please write email",
            "formRegister.gender.required" => "please select gender",
            "formRegister.address.required" => "please write the address",
            "formRegister.phone_number.required" => "please write your phone number",
        ];

        $this->validate([
            "formRegister.first_name" => "required|max:25",
            "formRegister.last_name" => "required|max:25",
            "formRegister.email" => "required|max:50|email|unique:members,email," . $this->member->id,
            "formRegister.gender" => "required",
            "formRegister.phone_number" => "required|digits:11|unique:members,phone_number," . $this->member->id,
            "formRegister.address" => "required"
        ], $message);

        $this->member->update($this->formRegister);
    }

    public function delete()
    {
        $this->member->delete();
        //$this->dispatch("refreshShowUser");
        return redirect(route("admin.members"));
    }

    public function render()
    {
        return view('livewire.admin.members.edit-members')->extends('layouts.app')->section('content');
    }
}
