<?php

namespace App\Livewire\Admin\Plans;

use App\Models\Plan;
use Livewire\Component;

class ShowPlans extends Component
{
    public function render()
    {
        return view('livewire.admin.plans.show-plans',
        [
            'plans'=>Plan::paginate(25)
        ]
        )->extends('layouts.app')->section('content');
    }
}
