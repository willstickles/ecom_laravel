<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable=['prod_name', 'prod_code', 'prod_price', 'image', 'prod_info', 'spl_price'];
    
}
