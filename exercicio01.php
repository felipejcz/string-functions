<?php
/*
Exercicio 01:
Retornar em um array todas as palavras contidas na string, caso a string esteja vazia retornar null;
*/

$string = "Uma string qualquer"; // Declaração da String;
var_dump(retornaPalavras($string));


function retornaPalavras($string){
    $array = [];
    $primeira = 0;
    if(strlen($string) == 0){
        array_push($array,null);
        return $array;
    }
    while(true){
        
        $atual = strpos($string," ",$primeira);
        if($atual == false){
            $atual = strpos($string," ",$primeira);
            array_push($array,substr($string,$primeira));
        break;
        }

        array_push($array,substr($string,$primeira,$atual-$primeira));
        $primeira = $atual+1;
    }
    return $array;
}