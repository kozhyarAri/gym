<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;
    //member_id	plan_id	user	amount	payment_expire
    protected $fillable = [
        'member_id',
        'plan_id',
        'user',
        'amount',
        'payment_expire'
    ];
}
