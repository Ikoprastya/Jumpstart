<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo(User::class, 'id', 'userID');
      }

    public function products(){
        return $this->belongsTo(Product::class, 'id', 'productID');
    }


    protected $fillable = [
        'userID',
        'productID',
        'orderAmount',
        'orderDateTime',
        'orderNote',
        'orderStatus',
      ];
}
