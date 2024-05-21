<?php
 
 $teste = file_get_contents('php://input');
 $objeto = json_decode($teste);
 //var_dump($objeto);
    $a = $objeto->valor1;
    $b = $objeto->valor2;
    $c = $objeto->valor3;
 if ($c == 'somar'){
    $resultado = $a + $b;
    echo json_encode($resultado);
 } else {
    $resultado = $a * $b;
    echo json_encode($resultado);
 }

 
 

 ?>
  
 