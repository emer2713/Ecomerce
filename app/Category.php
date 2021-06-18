<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'module', 'slug',
    ];
    public function subcategories(){
        return $this->hasmany(Subcategory::class);
    }
    public function tags(){
        return $this->hasmany(Tag::class);
    }
}
