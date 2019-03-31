<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function getBodyHtmlAttreibute()
    {
    	return \Parsedown::instance()->text($this->body);
    }
    public static function boot()
    {
    	parent::boot();

    	static::created(function ($answer) {
          $answer->question->increment('answers_count');
    	});
    }
}
