<?php
/*
(PHP 4, PHP 5, PHP 7)
strpos — Encontra a posição da primeira ocorrência de uma string 
*/

$string = "teste de string e ocorrencia";//Declaração da string;
$ocorrencia = "string"; //Declaracão da palavra que iremos procurar;

echo strpos($string,$ocorrencia);//Retorna a primeira posição da ocorrencia;
echo "</br>";
echo substr($string,strpos($string,$ocorrencia),strlen($ocorrencia));
//Retira apenas a ocorrencia da string;