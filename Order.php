<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';  
    protected $fillable = ['id','user_id','total','status'];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

   
    public function products() : BelongsTo
    {
        return $this->belongsTo(Product::class,'prod_id','id');
    }

    public function shippingaddress() : BelongsTo
    {
        return $this->belongsTo(ShippingAddress::class, 'user_id', 'id');
    }
}