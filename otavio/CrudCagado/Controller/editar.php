<?php
include_once '../Conexao/BancoD.php';
// $array = array(
//     'id' => 1,
//     'nome' => 2
// );
$nome =  'Rafa';
$item =  'Salame bem grande';
$preco =  '20';
$quantidade =  '5';
$id = '2';
update($id, $nome, $item, $preco, $quantidade)

?>