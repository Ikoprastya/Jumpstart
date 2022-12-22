<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
    ];

    public function order() {
        return $this->hasMany(Shipment::class, 'shipment');
    }
}
