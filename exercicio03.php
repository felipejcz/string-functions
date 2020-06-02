<?php
/*
Exercicio 03:   
Retornar a ultima e a penultima letra de uma string separando-as por um espaço.
*/

function lastLetters($word) {
    $tamanho = strlen($word);
    //return substr($word,$tamanho-1,1) . " " . substr($word,$tamanho-2,1);
    return substr($word,-1) . " " . substr($word,-2,1);
}

$string = "abacaxi";
echo "A palavra a ser manipulada é: '".$string."'.</br>";
echo "Retorno: '".lastLetters($string)."'.";