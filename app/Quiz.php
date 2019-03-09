<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{

    protected $table = 'quiz';

    public $timestamps = true;

    protected $fillable = [
        'software',
        'question1',
        'question2',
        'question3',
        'question4',
        'question5',
        'question6',
        'question7',
        'question8',
        'question9',
        'user_id'
    ];
}
