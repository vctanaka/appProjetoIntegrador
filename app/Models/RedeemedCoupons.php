<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RedeemedCoupons extends Model
{
    use HasFactory;
    protected $table = 'redeemed_coupons';
    protected $guarded = [];
}
