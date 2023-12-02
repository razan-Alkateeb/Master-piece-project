<?php
namespace App\Http\Controllers;
namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'user_phone',
        'user_address',
        'user_image',
        'password',
        'user_role',
        'google_id',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function gym()
    {
        return $this->hasMany(Gym::class);
    }
    public function subscriber()
    {
        return $this->hasMany(Subscriber::class);
    }
    public function payment()
    {
        return $this->hasMany(Payment::class);
    }
    public function usedcoupon()
    {
        return $this->hasMany(UsedCoupon::class);
    }
}
