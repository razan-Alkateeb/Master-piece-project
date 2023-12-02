<?php
namespace App\Http\Controllers;
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
    use HasFactory;
    protected $fillable = [
        'gym_name',
        'gym_description',
        'gym_workingHoursFrom',
        'gym_workingHoursTo',
        'gym_image',
        'gym_address',
        'gym_phone',
        'gym_facebook',
        'gym_instagram',
        'gym_email',
        'gym_owner_id',
        'gym_type_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class );
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
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


