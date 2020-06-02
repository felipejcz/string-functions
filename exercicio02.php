<?php
/*Exercicio 02:
Retirar uma palavra da string e retornar a frase sem a palavra;
*/
$string = "uma string qualquer";
$ocorrencia = "string";
echo "A Frase é: '".$string."'.";
echo "</br>";
echo "A palavra a ser retirada é: '".$ocorrencia."'.";
echo "</br>";
$começo = strpos($string,$ocorrencia);//Busca a primeira ocorrencia;

//Primeiro retira a frase antes da ocorrencia e depois concatena com a frase apos a ocorrencia;
$novaString = substr($string,0,$começo) . substr($string,$começo+strlen($ocorrencia));


//é possivel fazer o usa da função trim() caso a palavra a ser retirada seja a ultima, para não ficar um
//espaço vazio no final;


echo "Nova frase sem a palavra: '".$novaString."'.";
