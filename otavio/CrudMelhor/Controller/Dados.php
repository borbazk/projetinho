<?php
    include_once "../Conexao/BancoDados.php";
    $nome = isset($_GET["nome"])?$_GET["nome"]:"[nao informado]";
    $idade = isset($_GET["idade"]) ? $_GET["idade"] : "[nao inforado]";
    $hab1 = isset($_GET["hab1"])?$_GET["hab1"]:"[nao inforado]";
    $hab2 = isset($_GET["hab2"])?$_GET["hab2"]:"[nao inforado]";
    $ult = isset($_GET["ult"])?$_GET["ult"]:"[nao informado]";
    $data = isset($_GET["data"])?$_GET["data"]:"[nao informado]";
    $dados = [
        $nome,
        $idade,
        $hab1,
        $hab2,
        $ult,
        $data
    ];
    insert($dados);