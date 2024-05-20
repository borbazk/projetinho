<?php
    include_once '../Conexao/BancoD.php';
    $nome = isset($_GET["nome"])?$_GET["nome"]:"[nao informado]";
    $item = isset($_GET["item"])?$_GET["item"]:"[nao informado]";
    $preco = isset($_GET["preco"])?$_GET["preco"]:"[sem preco}";
    $quantidade = isset($_GET["quant"])?$_GET["quant"]:"[sem quant}";
    //var_dump($nome, $item, $preco, $quantidade);
    if ($_GET["acao"] == 'editar'){
      update($_GET['id'], $nome, $item, $preco, $quantidade);
    } else {
      insert($nome, $item, $preco, $quantidade);
    }
    header('Location: ../View/tabela.php');
  exit;
?>
