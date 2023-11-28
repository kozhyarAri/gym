<?php

namespace App\Livewire\Admin\Plans;

use App\Models\Plan;
use Livewire\Component;

class EditPlans extends Component
{

    public $plan;
    public $form = [];

    public function mount($id)
    {
        $this->plan = Plan::findOrFail($id);
        $this->form = [
            "plan_name" => $this->plan->plan_name,
            "duration" => $this->plan->duration,
            "price" => $this->plan->price,
        ];
    }

    public function update()
    {
        $message = [
            "form.plan_name.required" => "please write full name",
            "form.duration.required" => "please write email",
            "form.price.required" => "please write password",
        ];
        $this->validate([
            "form.plan_name" => "required|max:25",
            "form.duration" => "required|max:4",
            "form.price" => "required|max:10",
        ], $message);

        $this->plan->update($this->form);

        //$this->dispatch('refreshShowUser');
    }

    public function delete()
    {
        $this->plan->delete();
        //$this->dispatch("refreshShowUser");
        return redirect(route("admin.plans"));
    }
    public function render()
    {
        return view('livewire.admin.plans.edit-plans')->extends('layouts.app')->section('content');
    }
}
