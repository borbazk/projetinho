<?php
function conexao()
{
    $pdo = new PDO(
        'mysql:host=localhost;dbname=vaisefuder',
        'root',
        '',
    );
    return $pdo;
}
// // SELECT
// // UPDATE
// // DELETE
// // INSERT

function selectPorId($nome){
    $pdo = conexao();
    $sth = $pdo->prepare("SELECT * FROM MERCEARIA_FORGE WHERE id = '$nome'" );
    $sth->execute();

    $resultado = $sth->fetchAll();

    return $resultado;
}


//---------------------------------------------------------------------------------------------------------------------------------------------------------------

function select()
{
    $pdo = conexao();
    $sth = $pdo->prepare('SELECT * FROM MERCEARIA_FORGE ORDER BY id');
    $sth->execute();

    $resultado = $sth->fetchAll();

    return $resultado;
}

//---------------------------------------------------------------------------------------------------------------------------------------------------------------

function delete()
{;
    $pdo = conexao();
    $sth = $pdo->prepare('DELETE FROM $tabela WHERE $coluna = $valor');
    $resultado = $sth->execute();

    // $resultado = $sth->fetchAll();


    return $resultado;
}

//---------------------------------------------------------------------------------------------------------------------------------------------------------------



function insert($nome, $item, $preco, $quantidade)
{
    $pdo = conexao();
    //$sql = "INSERT INTO mercearia_forge values (DEFAULT , '". $nome . "', '" . $item . "',". $preco . "', '". $quantidade ."' )";
    $sql = "INSERT INTO mercearia_forge values (DEFAULT, '{$nome}', '$item', '$preco', '$quantidade')";
    echo $sql . "</br>";
    $sth = $pdo->prepare($sql);
    $resultado = $sth->execute();

    //  $resultado = $sth->fetchAll();


    return $resultado;
}

//---------------------------------------------------------------------------------------------------------------------------------------------------------------

function update($id, $nome, $item, $preco, $quantidade)
{;
    $pdo = conexao();
    $sql = "UPDATE vaisefuder.MERCEARIA_FORGE SET nome = '$nome',  nome_item = '$item', preco = '$preco', quantidade = '$quantidade' WHERE id = $id";
    echo $sql . "</br>";
    $sth = $pdo->prepare($sql);
 
    $resultado = $sth->execute();

    //  $resultado = $sth->fetchAll();


    return $resultado;
}

// var_dump(update("TABELA", array("CAMPO1" => "2"), "WHERE ID = 1"));
