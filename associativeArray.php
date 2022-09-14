<?php
// $assoArray = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40" );
// asort($assoArray);

// foreach($assoArray as $x => $x_value) {
//     echo "Key =" . $x . ", Value = " . $x_value;
//     echo "\n";
//   }

  //ASSOCIATIVE ARRAY in ascending order SORT BY VALUE

echo '<br>ASSOCIATIVE ARRAY in ascending order SORT BY VALUE <br>';
$assoArray = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
asort($assoArray);

foreach ($assoArray as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo '<br>';
}

echo '<br>ASSOCIATIVE ARRAY in ascending order SORT BY KEY <br>';

//ASSOCIATIVE ARRAY in ascending order SORT BY KEY
$assoArray = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
ksort($assoArray);

foreach ($assoArray as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo '<br>';
}

//ASSOCIATIVE ARRAY in DESCENDING order SORT BY VALUE

echo '<br>ASSOCIATIVE ARRAY in DESCENDING order SORT BY VALUE<br>';

$assoArray = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
arsort($assoArray);

foreach ($assoArray as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo '<br>';
}

//ASSOCIATIVE ARRAY in DESCENDING order SORT BY KEY

echo '<br>ASSOCIATIVE ARRAY in DESCENDING order SORT BY KEY <br>';

$assoArray = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
krsort($assoArray);

foreach ($assoArray as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo '<br>';
}