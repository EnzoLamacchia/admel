<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voice extends Model
{
    protected $table = 'voices';

    protected $fillable = array(
        'name', 'description', 'parent_id','vocabulary_id',
    );

    public function parent() {
        return $this->belongsTo('\App\Models\Voice', 'parent_id');
    }

    public function children() {
        return $this->hasMany('\App\Models\Voice', 'parent_id');
    }

//    public function webcontent() {
//        return $this->morphedByMany('App\Models\Content\Content', 'categorized');
//    }

    public function vocabulary() {
        return $this->belongsTo('\App\Models\Vocabulary', 'vocabulary_id');
    }

}
