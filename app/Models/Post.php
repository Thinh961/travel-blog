<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use Translatable;

    public $translatedAttributes = ['name', 'description', 'content'];
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
