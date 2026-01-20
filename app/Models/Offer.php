<?php

namespace App\Models;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
        use Translatable;

    protected $translationForeignKey = 'parent_id';

        public $translatedAttributes = ['title','brief','content'];

    public $table = "offers";
    public $fillable = [
        'slug','status','weight_order','start_date','end_date','published_at','created_by','updated_by'
        ,'web_image','mobile_image'

];



    const STATUS_PUBLISHED = 1;
    const STATUS_PENDING = 0;

    public static function getStatusList()
    {
        return
        [
            self::STATUS_PUBLISHED => __("Published"),
            self::STATUS_PENDING => __("Pending"),
        ];
    }








}
