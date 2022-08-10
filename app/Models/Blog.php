<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
<<<<<<< HEAD
=======

    public function getImageAttribute($image)
    {
        return asset($image);
    }
>>>>>>> b61ef255aa01ce8665ae58b42acae15d0193180d
}
