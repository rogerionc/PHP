<?php

/* ==================================================
Tipos de dados primitivos são divididos em 3 grupos
=====================================================
Tipos básicos: Inteiros numéricos, string, ponto flutuante, booleano.

Compostos: Array, objeto.

Dados especiais: Resource, null.
*/

/* Resource
É uma variável especial, que mantém uma referência a um recurso
externo*/
$arquivo = fopen("ex06-tiposespeciais.php", "r"); //fopen Abre um arquivo ou URL
var_dump($arquivo);

/* NULL
Nulo: é ausência de valor
Vazio: foi iniciado, tem informação, mas já foi reservado na memória */

 ?>
