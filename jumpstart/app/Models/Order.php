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

    public function getShipment(){
        return $this->belongsTo(Shipment::class, 'shipmentID');
    }

    public function getPayment(){
        return $this->belongsTo(Payment::class, 'paymentID');
    }

    public function getProduct()
    {
        return $this->belongsTo(Product::class, 'productID');
    }

    public function getUser()
    {
        return $this->belongsTo(User::class, 'userID');
    }

    protected $fillable = [
        'userID',
        'productID',
        'orderAmount',
        'orderDateTime',
        'orderNote',
        'shipmentID',
        'paymentID',
        'paymentHistory',
        'orderNumberID',
        'orderStatus',
      ];
}
