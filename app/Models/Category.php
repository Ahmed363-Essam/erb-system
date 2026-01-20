<?php

namespace App\Models;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
        use Translatable;

    protected $translationForeignKey = 'parent_id';

        public $translatedAttributes = ['title'];

    public $table = "category";
    public $fillable = ['created_at','updated_at','slug','title'];
}
