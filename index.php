<?php error_reporting(-1);
//В массиве А(N) поменять местами последний отрицательный элемент с максимальным элементом.
$A = [1, 7, 4, 9, 8, 23, 17, 22, -100, 7];

echo("A(n):<br>");
print_r($A);
echo("<br>Result:<br>");
print_r(replacement($A, last_negativ($A), max_search($A)));

function replacement($array, $number1, $number2){
    $val1 = $array[$number1];
    $val2 = $array[$number2];
    $array[$number2] = $val1;
    $array[$number1] = $val2;
    return $array;
}

function last_negativ($array){
    $negn = 0;
    for($i = 0; $i < count($array); $i++){
        if($array[$i] < 0){
            $negn = $i;
        }
    }
    return $negn;
}

function max_search($array){
    $maxn = null;
    $maxv = null;
    for($i = 0; $i < count($array); $i++){
        if($array[$i] > $maxv){
            $maxv = $array[$i];
            $maxn = $i;
        }
    }
    return $maxn;
}

