<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'phone',
        'country',
        'address',
        'poster',
        ];




    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // protected function roles(): Attribute
    // {
    //     return new Attribute(
    //     get: fn ($value) => ['Admin', 'User'][$value],
    //     );
    // }



}
