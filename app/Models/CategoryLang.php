<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class CategoryLang extends Model
{
    public $timestamps = false;
    public $table = "categories_lang";
    protected $fillable = ['name','summary','description'];
}
