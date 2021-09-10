<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branchoffice extends Model
{
    protected $fillable = [
        'name', 'slug', 'direction','phone','email', 'file_path','file',
    ];
    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }
}
