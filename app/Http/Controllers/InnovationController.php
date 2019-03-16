<?php

namespace App\Http\Controllers;

use App\Quiz;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InnovationController extends Controller
{

    protected $quiz;

    public function __construct(Quiz $quiz)
    {
        $this->quiz = $quiz;
    }
    
    public function home()
    {
        return view('innovation.home');
    }

    public function form()
    {
        return view('innovation.form');
    }

    public function login()
    {
        return view('innovation.login');
    }

    public function softwares()
    {
        return view('innovation.softwares');
    }

     public function contact()
    {
    	return view('innovation.contact');
    }

    public function guide()
    {
        return view('innovation.guide');
    }

    public function about()
    {
        return view('innovation.about');
    }

     public function return_quiz()
    {
        return view('innovation.return_quiz');
    }

    public function result($software)
    {
$quiz = Quiz::where('software', $software);
        if(is_null($quiz)){
            return redirect('quiz/home');
        }
        $total =  50;//self::calculateNotePerRow($quiz);
        //adicionar uma variável e depois na index
        $compartilhamento =  10;//self::ParcialCalc($quiz);
        $nomeSoftware = $quiz->software;
        return view('quiz.result', ['total' => $total, 'compartilhamento' => $compartilhamento, 'nomeSoftware' => $nomeSoftware ]);
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

    private static function getMediaFromAllNotes($totalQuiz)
    {
        return true;
    }
}
