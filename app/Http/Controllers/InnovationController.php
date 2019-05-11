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
        $getAllQuizBySoftware = Quiz::where("software", $software);

        if(is_null($getAllQuizBySoftware)){
            return redirect('quiz/home');
        }

        if($getAllQuizBySoftware->count() == 0){
            return view('innovation.noresults');
        }

        $total =  $this->geTotalAverage($getAllQuizBySoftware);
        
        $nomeSoftware = $software;
        return view('innovation.result', ['total' => $total,  'nomeSoftware' => $nomeSoftware ]);
    }

    private function geTotalAverage($allQuiz)
    {
        $total = 0;
        $totalAverageNotes= 0;

        foreach ($allQuiz->get() as $key => $quiz) {
            $totalAverageNotes += $this->getAverageNoteQuiz($quiz->getAttributes());
            $total ++;
        }
       
        $average = $totalAverageNotes/$total;

        return $average;
    }

    private function getAverageNoteQuiz($quiz)
    {
        $total  = 0;

        foreach ($quiz as $key => $value) {
            if($key != "id" && $key != "software" && $key !="user_id" ){
                if($value == 4){
                    $total += 1;
                }
                
                if($value == 3){
                    $total += 0.5;
                }
            }
        }

        $total = $total/9;

        return round($total,2);
    }

    public function indicators()
    {
        return view('innovation.indicators');
    }
}
