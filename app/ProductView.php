<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class ProductView extends Model
{
    protected $fillable = [
        'month', 'product_id', 'quantity',
    ];


    public function products(){
        return $this->hasMany(Product::class);
    }
}
