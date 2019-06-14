<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function question(){
        return  $this->belongsTo('App\Question','question_id','id');
    }
    public function votes(){
        return  $this->hasMany('App\Vote');
     }
}
