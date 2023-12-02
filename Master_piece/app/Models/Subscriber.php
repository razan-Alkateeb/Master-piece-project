<?php
namespace App\Http\Controllers;
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    protected $fillable = [
        'subscriber_start',
        'subscriber_end',
        'subscriber_number_visits',
        'subscriber_user_id',
        'subscriber_subscription_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }

    public function visit()
    {
        return $this->hasMany(Visit::class);
    }
    public function review()
    {
        return $this->hasMany(Review::class);
    }

}
