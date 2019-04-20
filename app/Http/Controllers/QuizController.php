<?php

namespace App\Http\Controllers;

use App\Quiz;
use Illuminate\Http\Request;
use App\Http\Requests\StoreQuizRequest;
use Auth;
use App\Http\Controllers\Controller;

class QuizController extends Controller
{

    protected $quiz;

    public function __construct(Quiz $quiz)
    {
        $this->quiz = $quiz;
        $this->middleware('auth');
    }

    public function evaluate()
    {
    	return view('quiz.evaluate');
    }

    public function evaluatesoftware(StoreQuizRequest $request)
    {
        $quiz = $this->quiz->create($request->all());
        return view('innovation.return_quiz');
    }
}