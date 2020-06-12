<?php

$resultado = 10 + 3 / 2;
echo $resultado . "<br>";

$resultado2 = (10 + 3) /2;
//O que está entre os parênteses, é calculado primeiro.
echo $resultado2 . "<br>";

$resultado3 = (10 + 3) / 2 > 5 && 10 + 5 < 3;
/*6.5 é maior que 5, sim! **E 15 é menor que 3, não!
Como uma das condições é falsa, é false. */
var_dump($resultado3);

//Para a condição ou, usa-se o pip pip ||


 ?>
