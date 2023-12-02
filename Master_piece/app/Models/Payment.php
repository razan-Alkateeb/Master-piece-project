<?php
namespace App\Http\Controllers;
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_amount',
        'payment_date',
        'payment_method',
       'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
