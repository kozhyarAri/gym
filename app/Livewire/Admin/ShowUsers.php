<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class ShowUsers extends Component
{

    protected $listeners = ['refreshShowUser' => 'render'];

    public function render()
    {
        return view('livewire.admin.show-users',
        [
            'users'=>User::paginate(25)
        ])->extends('layouts.app')->section('content');
    }
}
