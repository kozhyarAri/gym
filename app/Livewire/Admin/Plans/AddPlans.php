<?php

namespace App\Livewire\Admin\Plans;

use App\Models\Plan;
use Livewire\Component;

class AddPlans extends Component
{

    public $form=[
        "plan_name"=>'',
        "duration"=>'',
        "price"=>'',
    ];

    public function submit(){
        $message=[
            "form.plan_name.required"=>"please write plan_name",
            "form.duration.required"=>"please write duration",
            "form.price.required"=>"please write price",
        ];
        $this->validate([
            "form.plan_name"=>"required",
            "form.duration"=>"required|numeric",
            "form.price"=>"required|numeric",
        ],$message);

        Plan::create($this->form);
        
        $this->form=[
            "plan_name"=>'',
            "duration"=>'',
            "price"=>'',

        ];
        //$this->dispatch('refreshShowUser');
    }

    public function render()
    {
        return view('livewire.admin.plans.add-plans')->extends('layouts.app')->section('content');
    }
}
