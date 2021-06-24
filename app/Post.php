<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name', 'abstract', 'slug','user_id','body','status','category_id'
    ];
    public function image(){
        return $this->morphOne('App\image', 'imageable');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');

    }
}
