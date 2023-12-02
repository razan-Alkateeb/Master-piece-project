<?php
namespace App\Http\Controllers;
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_name',
    ];

    public function gym()
    {
        return $this->hasMany(Gym::class);
    }
    public function subscription()
    {
        return $this->hasMany(Subscription::class);
    }
}
