<?php

// Escopo de variavel significa até onde essa variavel sera enxergada.

$nome = "Rogerio"; // 1- fora das chaves há o escopo global.


function teste(){ // 2- O escopo é definido pelas chaves.
  global $nome; /* 5- Define que a var nome será ouvida dentro e fora
  da func teste.*/
  echo $nome;
}

/* 4- Aqui exibirá não identificado. Não identifica a var nome.
É necessário definir que $nome deve ser ouvido dentro da função teste.
**Pois $nome fora da função não é a mesma coisa que dentro da função.
*/

function teste2(){

  //Aqui dentro é outro escopo.
  global $nome;
  echo $nome . "teste do teste2";

}
teste(); // 3- Invocando, chamando a função teste.

teste2(); // Invocando, chamando a função teste

 ?>
