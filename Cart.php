<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';

    protected $fillable = ['id','prod_id','prod_qty','user_id'];

    //Relationship
    public function products() : BelongsTo
    {
        return $this->belongsTo(Product::class,'prod_id','id');
    }
}
