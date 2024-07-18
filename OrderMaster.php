<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderMaster extends Model
{



    use HasFactory;

    protected $table = 'order_masters';

    protected $fillable = ['user_id','total_amount','order_status'];


    
}