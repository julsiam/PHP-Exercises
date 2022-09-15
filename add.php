<?php
function sampleFunction($num1, $num2)
{
    if ($num1 == $num2) {
        return ($num1 + $num2) * 3;
    }
    return ($num1 + $num2);
}
echo sampleFunction(2, 4);
