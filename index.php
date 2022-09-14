<?php

//EXERCISE 6 = ARRAY IN ASCENDING ORDER

// $num = array(32, 20,16,3,26,5,10);
// sort($num);

// $arrayLength = count($num);
// for ($x = 0; $x<$arrayLength; $x++){
//     echo ($num[$x]);
//     echo "\n";

// }


//MULTIPLICATION TABLE

// $base1 = 1; 
// $base2 = 2; 
// $base3 = 3;
// $base4 = 4;
// $base5 = 5;
// $base6 = 6;
// $base7 = 7;
// $base8 = 8;
// $base9 = 9;
// $base10 = 10;

// for($i=1; $i<=10; $i++)   
// {
// $product1 = $i*$base1;
// $product2 = $i*$base2;
// $product3 = $i*$base3;
// $product4 = $i*$base4;
// $product5 = $i*$base5;
// $product6 = $i*$base6;
// $product7 = $i*$base7;
// $product8 = $i*$base8;
// $product9 = $i*$base9;
// $product10 = $i*$base10;

// echo "$base1 * $i = $product1" ; 
// echo "      ";  
// echo "$base2 * $i = $product2" ;  
// echo "      "; 
// echo "$base3 * $i = $product3" ; 
// echo "      ";  
// echo "$base4 * $i = $product4" ;   
// echo "      ";
// echo "$base5 * $i = $product5" ;   
// echo "      ";
// echo "$base6 * $i = $product6" ; 
// echo "      ";  
// echo "$base7 * $i = $product7" ; 
// echo "      ";  
// echo "$base8 * $i = $product8" ;
// echo "      ";   
// echo "$base9 * $i = $product9" ;   
// echo "      ";
// echo "$base10 * $i = $product10" ;   
// echo "      ";

// echo '<br>';	 
// }

//ASSOCIATIVE ARRAY in ascending order SORT BY VALUE

// echo '<br>ASSOCIATIVE ARRAY in ascending order SORT BY VALUE <br>';
// $assoArray = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
// asort($assoArray);

// foreach ($assoArray as $x => $x_value) {
//     echo "Key=" . $x . ", Value=" . $x_value;
//     echo '<br>';
// }

// echo '<br>ASSOCIATIVE ARRAY in ascending order SORT BY KEY <br>';

//ASSOCIATIVE ARRAY in ascending order SORT BY KEY
// $assoArray = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
// ksort($assoArray);

// foreach ($assoArray as $x => $x_value) {
//     echo "Key=" . $x . ", Value=" . $x_value;
//     echo '<br>';
// }

//ASSOCIATIVE ARRAY in DESCENDING order SORT BY VALUE

// echo '<br>ASSOCIATIVE ARRAY in DESCENDING order SORT BY VALUE<br>';

// $assoArray = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
// arsort($assoArray);

// foreach ($assoArray as $x => $x_value) {
//     echo "Key=" . $x . ", Value=" . $x_value;
//     echo '<br>';
// }

//ASSOCIATIVE ARRAY in DESCENDING order SORT BY KEY

// echo '<br>ASSOCIATIVE ARRAY in DESCENDING order SORT BY KEY <br>';

// $assoArray = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
// krsort($assoArray);

// foreach ($assoArray as $x => $x_value) {
//     echo "Key=" . $x . ", Value=" . $x_value;
//     echo '<br>';
// }


//FizzBuzz

// for ($i = 1; $i <= 100; $i++) {
//     if ($i % 15 == 0) {
//         echo ' FizzBuzz ';
//     } elseif ($i % 3 == 0) {
//         echo ' Fiz ';
//     } elseif ($i % 5 == 0) {
//         echo ' Buzz ';
//     } else {
//         echo $i . "    ";
//     }
// }

//Largest Number/ Max

$largestNum = (max(744444438, 38483875, 28463));
echo "The largest number is: ".$largestNum;
