<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellItem extends Model
{
    use HasFactory;
    protected $table ='sellitems';
    protected $fillable =[
        'price',
        'quantity',
        'id_sell',
        'id_product',
    ];
}
