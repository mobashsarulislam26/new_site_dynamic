<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens;

class admin extends Authenticatable
{

    use HasFactory, Notifiable;

        // protected $guard = 'admin';
        // protected $fillable = [
        //     'username','password',
        // ];
}
