<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductRating extends Model
{
    use HasFactory; 

    protected $fillable = [
        'id','product_id','username','email','comment','rating','status'];

       
    public function products() { 
        return $this->belongsTo(Product::Class,'product_id');
    }

}
