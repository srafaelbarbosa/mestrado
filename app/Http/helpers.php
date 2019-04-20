<?php 

use App\Quiz;
	
function mediaQuestao($software, $question){

	$answers = Quiz::where('software', $software)->get();

	$i = 0;
	$total = 0;
	foreach ($answers as $item) {
		switch ($question){
		  case 1:
		    $total += $item->question1;
		    $i++;
		    break;
		  case 2:
		    $total += $item->question2;
		    $i++;
		    break;
		  case 3:
		    $total += $item->question3;
		    $i++;
		    break;
		  case 4:
		    $total += $item->question4;
		    $i++;
		    break;
		  case 5:
		    $total += $item->question5;
		    $i++;
		    break;
		  case 6:
		    $total += $item->question6;
		    $i++;
		    break;
		  case 7:
		    $total += $item->question7;
		    $i++;
		    break;
		  case 8:
		    $total += $item->question8;
		    $i++;
		    break;
		  case 9:
		    $total += $item->question9;
		    $i++;
		    break;
		}
		
	}
	
	return  number_format($total/$i, 2, '.', '');



}
	










 ?>