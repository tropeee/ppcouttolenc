<?php

namespace App;
use App\Traits\DatesTranslator;
use TCG\Voyager\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use DatesTranslator;


    public function getSubmitedAttr($submitted){
        Date::setLocale('es');
        return new Date($submitted);
    }

    protected  $table = "posts";

    protected $dates = ['created_at'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
