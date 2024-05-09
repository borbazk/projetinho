<?php
    include_once '../Conexao/BancoD.php';
    $nome = isset($_GET["nome"])?$_GET["nome"]:"[nao informado]";
    $item = isset($_GET["item"])?$_GET["item"]:"[nao informado]";
    $preco = isset($_GET["preco"])?$_GET["preco"]:"[sem preco}";
    $quantidade = isset($_GET["quant"])?$_GET["quant"]:"[sem quant}";
    //var_dump($nome, $item, $preco, $quantidade);
    insert($nome, $item, $preco, $quantidade)
?>
