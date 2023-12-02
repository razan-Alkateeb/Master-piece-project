<?php
namespace App\Http\Controllers;
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;


    protected $fillable = [
        'subscription_visits',
        'subscription_price',
        'subscription_type_id',
        'subscription_time_id',

    ];


    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function time()
    {
        return $this->belongsTo(Time::class);
    }
    public function subscriber()
    {
        return $this->hasMany(Subscriber::class);
    }
    public function coupon()
    {
        return $this->hasMany(Coupon::class);
    }

}
