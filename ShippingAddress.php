<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ShippingAddress extends Model
{
    use HasFactory; 
    
    protected $table = 'shipping_addresses';
    
    protected $fillable = ['id', 'user_id','first_name', 'last_name', 'email', 'mobile', 'address', 'apartment', 'city', 'state', 'zip'];

            
    public function orders(): HasMany // Corrected return type declaration
    {
        return $this->hasMany(Order::class, 'user_id','user_id');
    }
    public function shippingAddress()
{
    return $this->hasOne(ShippingAddress::class);
}

}
