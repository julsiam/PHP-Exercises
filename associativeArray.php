<?php
$assoArray = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40" );
asort($assoArray);

foreach($assoArray as $x => $x_value) {
    echo "Key =" . $x . ", Value = " . $x_value;
    echo "\n";
  }