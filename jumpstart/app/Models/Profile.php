<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'gender', 'phone', 'country',
        'amount', 'birthday', 'address', 'user_id'

    ];

    public function users(){
        return $this->belongsTo(User::class, 'id', 'user_id');
      }
}
