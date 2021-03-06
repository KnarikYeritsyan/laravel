<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\HasRelationships;
use TCG\Voyager\Traits\Translatable;

class Category extends Model
{
    use Translatable,
        HasRelationships;

    protected $translatable = ['slug', 'name'];

    protected $table = 'categories';

    protected $fillable = ['slug', 'name'];

/*    public function posts()
    {
        return $this->hasMany(Voyager::modelClass('Post'))
            ->published()
            ->orderBy('created_at', 'DESC');
    }

    public function postings()
    {
        return $this->hasMany(Voyager::modelClass('App\Posting'))
            ->orderBy('created_at', 'DESC');
    }*/
/*    public function parentId()
    {
        return $this->belongsTo(self::class);
    }*/
}

