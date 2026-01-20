<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class OfferLang extends Model
{
    public $timestamps = false;
       public $table = "offers_lang";


    protected $fillable = ['title','brief','content'];
}
