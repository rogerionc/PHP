<?php

$a = 30;
$b = 55;

var_dump($a > $b);
echo ">" . "<br>";

var_dump($a < $b);
echo "<" . "<br>";

//var_dump($a = $b); //1 sinal de = atribui.
//echo "= atribui" . "<br>";

//var_dump($a == $b); //2 sinais de = compara somente valor, não tipo.
//echo "== compara só valor, não tipo" . "<br>";

var_dump($a === $b); //3 sinais de = compara valor e tipo.
echo "=== compara valor e tipo" . "<br>";

var_dump($a != $b); //compara se é diferente, ou não é igual.
echo "!= compara se é dif. ou igual" . "<br>";

var_dump($a <=> $b);
/*operador nave espacial, se a for maior, tras 1,
se o b for maior, tras -1. */
echo "<=> tras o valor maior 1, e menor -1" . "<br>";

$c = null;
$d = null;
$e = 10;
echo $c ?? $d ?? $e;
//operador ?? nullcoalesce trata operadores nulos.
echo " ??nullcoalesce mostra somente valores não nulos" . "<br>";

 ?>
