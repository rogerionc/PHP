<?php

/* ==================================================
Tipos de dados primitivos são divididos em 3 grupos
=====================================================
Tipos básicos: Inteiros numéricos, string, ponto flutuante, booleano.

Compostos: Array, objeto.

Dados especiais: Resource, null.
*/

//ARRAY
$frutas = array("abacaxi", "laranja", "manga");

echo $frutas[2];

echo "<br>";

//OBJETO
$nascimento = new DateTime();
var_dump($nascimento); //Exibe o tipo do objeto da classe dateTime.


 ?>
