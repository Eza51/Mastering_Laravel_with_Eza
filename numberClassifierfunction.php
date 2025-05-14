<?php
function getSign($number)
{
    if ($number > 0) {
        return "positive";
    } elseif ($number < 0) {
        return "Negetive";
    } else {
        return "zero";
    }
}


function getParity($number)
{
    if ($number % 2 == 0) {
        return "even";
    } else {
        return "odd";
    }
}

$number = 5;
echo "the number $number is " . getSign($number) . " and " . getParity($number);
