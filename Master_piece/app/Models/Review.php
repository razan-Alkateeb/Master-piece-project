<?php

namespace App\Http\Controllers;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'review_text',
        'review_date',
        'review_rate',
        'review_gym_id',
        'review_subsecriber_id',
    ];

    public function gym()
    {
        return $this->belongsTo(Gym::class);
    }
    public function subscriber()
    {
        return $this->belongsTo(Subscriber::class);
    }
}
