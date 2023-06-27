<?php
   
   echo "<h1>Math Functions :-</h1>";

   $num1 = -314;
   echo "abs() : ". abs($num1) ."</br>";

   $num2 = 5.9;
   echo "ceil() : ". ceil($num2) ."</br>";

   $num3 = 45;
   echo "deg2rad() : ". deg2rad($num3) ."</br>";
   echo "rad2deg() : ". rad2deg($num3) ."</br>";

   $num5 = 5.9;
   echo "floor() : ". floor($num5) ."</br>";

   echo "rand(): ".rand(1 ,100) ."</br>";

   echo "pi() : ".pi()."</br>";

   echo "pow() : ".pow(2,2)."</br>";

   echo "round() : ".round(5.5)."</br>";

   $a = array(1,2,3,4,5);
   echo "min() : ".min($a)."</br>";

   $b = [10,20,30,40,9];
   echo "max() : ".max($b)."</br>"; 

?>
