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
    /**
     * Get the user that owns the Payments
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function member()
    {
        return $this->belongsTo(Members::class, 'member_id')->select('first_name');
    }
    public function plan()
    {
        return $this->belongsTo(Plan::class, 'plan_id')->select('plan_name');
    }
}
