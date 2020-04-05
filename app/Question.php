<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillabl = ['title', 'body'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

//    $question = Question::find(1);
//$question = Question
}
