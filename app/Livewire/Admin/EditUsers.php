<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;     

class EditUsers extends Component
{
    public $user;
    public $formRegister=[];

    public function mount($id){
        $this->user=User::findOrFail($id);
        $this->formRegister=[
            "name"=>$this->user->name,
            "email"=>$this->user->email,
            "password"=>'',
            "password_confirmation"=>'',
            "phone_number"=>$this->user->phone_number,
            "role"=>$this->user->role
        ];
    }

    public function update(){
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
            "formRegister.email"=>"required|max:50|email|unique:users,email,".$this->user->id,
            "formRegister.password"=>"nullable|confirmed|max:50",
            "formRegister.phone_number"=>"required|digits:11|unique:users,phone_number,".$this->user->id,
            "formRegister.role"=>"required"
        ],$message);

       
        if($this->formRegister['password']==''){
            $this->user->update([
                "name"=>$this->formRegister['name'],
                "email"=>$this->formRegister['email'],
                "phone_number"=>$this->formRegister['phone_number'],
                "role"=>$this->formRegister['role']
            ]);
        }else{
            $this->user->update($this->formRegister);
        }
        $this->dispatch('refreshShowUser');
    }

    public function delete(){
        $this->user->delete();
        $this->dispatch("refreshShowUser");
        return redirect(route("admin.users"));
    }

    public function render()
    {
        return view('livewire.admin.edit-users')->extends('layouts.app')->section('content');
    }
}
