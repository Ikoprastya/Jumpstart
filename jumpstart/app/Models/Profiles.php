<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    use HasFactory;


    protected $fillable = [
        'UserID',
        'gender',
        'phone',
        'country',
        'birthday',
        'address'

    ];

    public function profile(){
        return $this->hasOne(User::class, 'profileID');
      }

}
