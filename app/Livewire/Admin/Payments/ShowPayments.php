<?php

namespace App\Livewire\Admin\Payments;

use App\Models\Payments;
use Livewire\Component;

class ShowPayments extends Component
{
    public function render()
    {
        return view('livewire.admin.payments.show-payments',
        [
            'payments'=>Payments::paginate(25)
        ])->extends('layouts.app')->section('content');
    }
}
