<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{// plan_id	user	first_name	last_name	email	gender	address	phone_number
    //	membership_status	card_num	expire_date	image	
    use HasFactory;
    protected $fillable =[
        'plan_id',
        'user_id',
        'first_name',
        'last_name',
        'email',
        'gender',
        'address',
        'phone_number',
        'membership_status',
        'card_num',
        'expire_date',
        'image'
    ];
}
