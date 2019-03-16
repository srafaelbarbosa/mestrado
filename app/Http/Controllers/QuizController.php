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

    public function result($id)
    {
        $quiz = Quiz::find($id);
        if(is_null($quiz)){
            return redirect('quiz/home');
        }
        $total = self::calculateNotePerRow($quiz);
        //adicionar uma variável e depois na index
        $compartilhamento = self::ParcialCalc($quiz);
        $nomeSoftware = $quiz->software;
        return view('quiz.result', ['total' => $total, 'compartilhamento' => $compartilhamento, 'nomeSoftware' => $nomeSoftware ]);
    }

    public function evaluatesoftware(StoreQuizRequest $request)
    {
        $quiz = $this->quiz->create($request->all());
        return view('innovation.return_quiz');
    }

    private static function calculateNotePerRow($quiz)
    {
        $total  = 0;

        foreach ($quiz->getAttributes() as $key => $value) {
            
            if($value == 4){
                $total += 1;
            }
            
            if($value == 3){
                $total += 0.5;
            }
        }
        
        $total = $total/9;
        return round($total,2);
    }

    //adicionar função com seção de perguntas
    private static function ParcialCalc($quiz)
    {
        $total = 0;
        if ($quiz->question6 == 3) {
            $total++;
        }
        if ($quiz->question7 == 3) {
            $total++;
        }
        if ($quiz->question8 == 3) {
            $total++;
        }
        return $total!=3;
    }
}


//retorna o valor da pergunta respondida
//$quiz->question1 