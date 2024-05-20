<?php
include_once '../Conexao/BancoD.php';
 
if ($_GET['acao'] == 'deletar') {
    $ResultadoDoBanco =  delete($_GET['Id']);
} 
header('Location: ../View/tabela.php');
?>
