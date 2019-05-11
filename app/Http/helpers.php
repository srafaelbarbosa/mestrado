<?php 

use App\Quiz;
	
function mediaQuestao($software, $question){

	$answers = Quiz::where('software', $software)->get();

	$i = 0;
	$total = 0;
	foreach ($answers as $item) {
		switch ($question){
		  case 1:
		    $total += countPoints($item->question1);
		    $i++;
		    break;
		  case 2:
		    $total += countPoints($item->question2);
		    $i++;
		    break;
		  case 3:
		    $total += countPoints($item->question3);
		    $i++;
		    break;
		  case 4:
		    $total += countPoints($item->question4);
		    $i++;
		    break;
		  case 5:
		    $total += countPoints($item->question5);
		    $i++;
		    break;
		  case 6:
		    $total += countPoints($item->question6);
		    $i++;
		    break;
		  case 7:
		    $total += countPoints($item->question7);
		    $i++;
		    break;
		  case 8:
		    $total += countPoints($item->question8);
		    $i++;
		    break;
		  case 9:
		    $total += countPoints($item->question9);
		    $i++;
		    break;
		}
		
	}
	
	return  number_format($total/$i, 2, '.', '');
}

function countPoints($value){

	if($value === 4){
		return 1; 
	}

	if($value === 3){
		return 0.5;
	}

	return 0;
}


 ?>