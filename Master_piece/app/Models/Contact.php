<?php

namespace App\Models;
use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Mail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $fillable = ['name', 'email', 'message'];

    public static function boot() {

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "razan.alkateeb0@gmail.com";
            Mail::to($adminEmail)->send(new ContactFormSubmitted($item));
        });
    }
}
