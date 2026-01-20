<?php

namespace App\Models;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Translatable;
    public $table = "category";
    protected $translationForeignKey = 'parent_id';

    public $translatedAttributes = ['name','summary','description'];

    public $fillable = ['type','status','youtube_link'];
}
