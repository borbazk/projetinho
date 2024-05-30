<?php
function conexao()
{
    $pdo = new PDO(
        'mysql:host=localhost;dbname=valorant',
        'root',
        '',
    );
    return $pdo;
}

function selectPorId($id){
    $pdo = conexao();
    $sth = $pdo->prepare("SELECT * FROM agent_valorant WHERE id = '$id'" );
    $sth->execute();

    $resultado = $sth->fetchAll();

    return $resultado;
}

function delete($id)
{
    $pdo = conexao();
    $sql = "DELETE FROM agent_valorant WHERE id = $id";
    var_dump($sql);
    $sth = $pdo->prepare($sql);
    $resultado = $sth->execute();

    return $resultado;
}

function insert($dados){
    $pdo = conexao();
    $sth = $pdo->prepare("INSERT INTO agent_valorant(nome, idade, hab1, hab2, ult, datanasc) VALUES(?,?,?,?,?,?)");
    $sth->execute($dados);

    $resultado = $sth->fetchAll();

    return $resultado;
}