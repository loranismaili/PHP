<?php


$sports = ['Football','Basketball','Handball','Volleyball','Golf','Tennis'];

$output1 = array_slice($sports,2);
$output2 = array_slice($sports,-2,1);
$output3 = array_slice($sports,0,3);

var_dump($output1,$output2,$output3);

?>