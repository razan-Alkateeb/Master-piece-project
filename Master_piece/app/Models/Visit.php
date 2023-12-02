<?php
namespace App\Http\Controllers;
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $fillable = [
        'visit_code',
        'visit_date',
        'is_visited',
        'visit_gym_id',
        'visit_subscriber_id',
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
