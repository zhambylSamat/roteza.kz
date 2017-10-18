<?php
$question = $_POST['question'];
$answer = $_POST['ans'];
// $checked = $_POST['ch'];
$q = 0;
while ($q>-1){
	if(isset($question[$q])){
		echo $question[$q].' :<br>';
		$j = 0;
		while($j>-1){
			if(isset($answer[$q][$j])){
				echo "---> ".$answer[$q][$j].'<br>';
			}
			else $j = -2;
			$j++;
		}
	}
	else $q = -2;
	$q++;
}
?>