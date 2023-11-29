<?php

namespace App\Livewire\Admin\Payments;

use App\Models\Members;
use App\Models\Payments;
use App\Models\Plan;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AddPayments extends Component
{
    public $members = [];
    public $plans = [];


    public $form = [
        "plan_id" => '',
        "member_id" => '',
    ];

    public function submit()
    {
        $message = [
            "form.plan_id.required" => "please select a plan",
            "form.member_id.required" => "please select the member",
        ];
        $this->validate([
            "form.plan_id" => "required",
            "form.member_id" => "required",
        ], $message);
        $plan = Plan::where('id',$this->form['plan_id'])->first();
        //dd($plan->price);
        $member = Members::where('id',$this->form['member_id'])->first();
        $currentDate = Carbon::now();
        Payments::create(['member_id'=>$this->form['member_id'],'plan_id'=>$this->form['plan_id'],'amount'=>$plan->price,'user'=>Auth::user()->id,'payment_expire'=>$currentDate->addMonths($plan->duration)]);
        $member->update(['payment_expire' => $currentDate->addMonths($plan->duration),'membership_status' =>'active']);
        $this->form = [
            "plan_id" => '',
            "member_id" => '',
        ];
    }

    public function mount()
    {
        $this->members = Members::select('id', 'email')->get();
        $this->plans = Plan::select('id', 'plan_name', 'price')->get();
    }
    public function render()
    {
        return view('livewire.admin.payments.add-payments')->extends('layouts.app')->section('content');
    }
}
