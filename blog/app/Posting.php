<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;


class Posting extends Model
{
    use Translatable;
    protected $translatable = ['title','slug','excerpt','body','seo_title','meta_description','meta_keywords'];

/*    public function category()
    {
        return $this->belongsTo('App\Category');
    }*/
}
