<?php

/* Variáveis pré definidas ou Arrays super globais:
================================================================
São variáveis internas do PHP que já vem com alguns recursos.
Há também variáveis de ambiente que também são pre-definidas.

SUPER GLOBAIS: Não importa onde se está no PHP, é possível acessar as
informações dentro das variáveis prédefinidas (escopo).

Variáveis de ambiente: São informações externas.
Ex. coisas que o usuário informa em um formulário. $POST ou $GET é informação
do ambiente.

$POST e $GET são variáveis prédefinidas que recuperam
informações do formulário.
*/

$nome = $_GET["a"]; /* define que a partir da ? na URL, iremos
                    informar variáveis para o servidor */
var_dump($nome);

echo "<br>";

$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;

echo "<br>";

$ip2 = $_SERVER["SCRIPT_NAME"];
echo $ip2;

 ?>
