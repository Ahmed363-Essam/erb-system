<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class Category extends Model implements HasMedia
{
    use Translatable , InteractsWithMedia;
    public $table = "categories";
    protected $translationForeignKey = 'parent_id';

    public $translatedAttributes = ['name', 'summary', 'description'];

    public $fillable = ['type', 'status', 'youtube_link'];
}
