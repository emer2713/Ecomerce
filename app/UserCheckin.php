<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCheckin extends Model
{
    protected $fillable = [
        'name', 'slug', 'direction','phone','email', 'file_path','file',
    ];

    public function checkins(){
        return $this->hasmany(UserCheckin::class);
    }
}
