<?php 

function getRandomizedArrayOfNumbers($minValue, $maxValue)
{
    $sortedList = [];
    for ($i = $minValue; $i <= $maxValue; $i++) {
        array_push($sortedList, $i);
    }
    $randomizedList = [];
    while (count($sortedList)) {
        $value = rand(0, count($sortedList) - 1);
        array_push($randomizedList, $sortedList[$value]);
        unset($sortedList[$value]);
        $sortedList = array_values($sortedList);
    } 
    return $randomizedList;
}


?>