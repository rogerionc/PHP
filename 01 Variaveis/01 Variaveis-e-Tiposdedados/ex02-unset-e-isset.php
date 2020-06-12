<?php

$teste = "Oi";

//unset limpa variáveis da memória
unset($teste);

if (isset($teste)){ //isset executa o echo só se a variável existir.
  echo $teste;
} else {
  echo "Variável não existe";
}

 ?>
