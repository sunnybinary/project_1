<?php

$num1=4;
$num2=5;
$num3=6;

if($num1>$num2 && $num1>$num3){
  $largest_num=$num1;
}else if($num2>$num1 && $num2>$num3){
  $largest_num=$num2;
}else{
  $largest_num=$num3;
}

echo "Largest Number is ".$largest_num;
