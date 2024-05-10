<?php
function select()
{
    $pdo = conexao();
    $sth = $pdo->prepare('SELECT * FROM MERCEARIA_FORGE ORDER BY id');
    $sth->execute();

    $resultado = $sth->fetchAll();

    return $resultado;
}
?>