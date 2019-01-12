<?php

namespace App\Http\Controllers;

use App\Quiz;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuizController extends Controller
{

    public function home()
    {
        return view('quiz.home');
    }

    public function evaluate()
    {
    	return view('quiz.evaluate');
    }

    public function result($id)
    {

        $quiz = Quiz::find($id);
        die(var_dump($quiz));
    	return view('quiz.result');
    }
}
