<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrudApp extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'gender',
       
        'occupation',
        'image',
        'date',
        'fruits',
       
    ];
}