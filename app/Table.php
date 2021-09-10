<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $fillable = [
        'name', 'slug', 'direction','phone','email', 'file_path','file',
    ];
    public function branchoffice()
    {
        return $this->hasOne(Branchoffice::class, 'id', 'branchoffice_id');
    }
}
