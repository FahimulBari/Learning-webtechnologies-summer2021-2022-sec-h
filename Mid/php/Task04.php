<?php

$numberA = 15;
$numberB = 75;
$numberC = 100;

if($numberA > $numberB) {
	if($numberA > $numberC){
         echo $numberA." is the largest";
	}
	else if ($numberA == $numberC) {
		echo $numberA." & ".$numberC." are equal & largest";
	}
	else{
         echo $numberB." is the largest";
	}
}
else if($numberA == $numberB){
	if($numberB > $numberC){
		 echo $numberA." & ".$numberC." are equal & largest";
	}
	else if ($numberB == $numberC) {
		echo $numberB." & ".$numberC." & ".$numberA. " are equal & largest";
	}
	else{
		 echo $numberC." is the largest";
	}
}
else {
	if($numberB > $numberC){
		 echo $numberB." is the largest";
	}
	else if ($numberB == $numberC) {
		echo $numberB." & ".$numberC." are equal & largest";
	}
	else{
		 echo $numberC." is the largest";
	}
}

?>