<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItem extends Model
{
    use HasFactory;

    protected $table = 'orderitems';

    protected $fillable = ['id','prod_id','prod_qty','orderId','price'];

    //Relationship
    public function products() : BelongsTo
    {
        return $this->belongsTo(Product::class,'prod_id','id');
    }
}
