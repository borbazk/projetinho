<?php
 function conexao(){
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

//---------------------------------------------------------------------------------------------------------------------------------------------------------------

    function select(){
        $pdo = conexao(); 
        $sth = $pdo->prepare('SELECT * FROM MERCEARIA_FORGE ORDER BY id');
        $sth->execute();
    
        $resultado = $sth->fetchAll();
    
        return $resultado;
    
        
    }

//---------------------------------------------------------------------------------------------------------------------------------------------------------------
    
    function delete(){;
        $pdo = conexao(); 
        $sth = $pdo->prepare('DELETE FROM $tabela WHERE $coluna = $valor');
        $resultado = $sth->execute();
    
        // $resultado = $sth->fetchAll();
        
    
        return $resultado;
    
        
    }

//---------------------------------------------------------------------------------------------------------------------------------------------------------------

    function insert(){;
        $pdo = conexao(); 
        $sth = $pdo->prepare('INSERT INTO vaisefuder.MERCEARIA_FORGE(id, nome, nome_item, preco, quantidade)value(6, jvaScript, Curso de JavaScript, 35, 18, 2017)');
        $resultado = $sth->execute();
    
      //  $resultado = $sth->fetchAll();
        
    
        return $resultado;
    
        
    }

//---------------------------------------------------------------------------------------------------------------------------------------------------------------

    function update(){;
        $pdo = conexao(); 
        $sth = $pdo->prepare('UPDATE vaisefuder.MERCEARIA_FORGE SET nome = "otavio" WHERE id = 4');
        $resultado = $sth->execute();
    
      //  $resultado = $sth->fetchAll();
        
    
        return $resultado;
    
        
    }

    // var_dump(update("TABELA", array("CAMPO1" => "2"), "WHERE ID = 1"));
?>