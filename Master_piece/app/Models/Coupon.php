<?php

namespace App\Http\Controllers;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'coupon_code',
        'coupon_discount_percentage',
        'coupon_expire_date',
        'coupon_subscription_id',
    ];

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }
    public function usedcoupon()
    {
        return $this->hasMany(UsedCoupon::class);
    }
}
