<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table ='products';
    protected $fillable =[
        'name',
        'price',
        'img',
        'condition',
        'description',
        'ship',
        'stock',
        'size',
        'status',
        'id_category',
        'id_user',
    ];
}
