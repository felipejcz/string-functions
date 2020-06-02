<?php
/*
Exercicio 04: 
Receba um array com N elementos, subtraia o elemento atual com seu proximo e some as subtrações;
Ex: Array com as seguintes posições: {3,6,8,5}
|3-6| = 3
|6-8| = 2
|8-5| = 3
3+2+3 = 8
*/


$array = [2,3,5,7,9]; //2,3,5,7,9 = 1+2+2+2=7

function somaDeResultados($array){
    $sum = 0;
    for ($i=1; $i < count($array); $i++) { 
        $aux = abs($array[$i] - $array[$i-1]);
        $sum += $aux;
        echo "|".$array[$i]." - ".$array[$i-1]."| = ".$aux."</br>";
    }
    return $sum;
}

echo "|Total = ".somaDeResultados($array);
