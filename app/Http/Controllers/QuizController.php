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

        $total  = 0;
        foreach ($quiz->getAttributes() as $key => $value) {
            if($value == 3){
                $total ++;
            }
        }
        
        $total = $total/15;
        return round($total,2);
    }
}
