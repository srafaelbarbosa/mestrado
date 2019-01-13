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
        $total = self::calculateResult($quiz);

        return view('quiz.result', ['total' => $total ]);
    }
    
    public function contact()
    {
    	return view('quiz.contact');
    }

    public function about()
    {
        return view('quiz.about');
    }

    private static function calculateResult($quiz)
    {
        
        $total = $quiz->question1 + $quiz->question2 + $quiz->question3+ $quiz->question4+ $quiz->question5+ $quiz->question6+ $quiz->question7+ $quiz->question8+ $quiz->question9+ $quiz->question10
        + $quiz->question11+ $quiz->question12+ $quiz->question13+ $quiz->question14+ $quiz->question15;
        
        $total = $total/45;
        return round($total,2);
    }
}
