<?php
/*
(PHP 4, PHP 5, PHP 7)
substr — Retorna uma parte de uma string
*/

$string = "uma string qualquer";

//São passados 3 parametros sendo o terceiro opcional.
//1º = A string a ser manipulada;
//2º = A posição inicial do recorte;
//3º = Quantidade de posições a serem contadas a partir da posição inicial;
//OBS: Se o segundo parametro for um valor negativo é feito a contagem do fim ao inicio.
echo substr($string,0,5);
