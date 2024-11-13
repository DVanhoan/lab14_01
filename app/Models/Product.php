<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'ProductId';

    protected $fillable = [
        'categoryID',
        'productCode',
        'productName',
        'description',
        'productImage',
        'listPrice',
        'discountPercent'
    ];
}
