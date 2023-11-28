<?php

namespace App\Livewire\Admin\Members;

use App\Models\Members;
use Livewire\Component;

class ShowMembers extends Component
{
    public function render()
    {
        return view('livewire.admin.members.show-members',
        [
            'members'=>Members::paginate(25)
        ]
        )->extends('layouts.app')->section('content');
    }
}
