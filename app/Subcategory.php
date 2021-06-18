<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = [
        'name', 'module', 'slug',
    ];
    public function category(){
        return $this->belongsto(Category::class);
    }
}
