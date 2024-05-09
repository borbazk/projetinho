<?php
    include_once '../Conexao/BancoD.php';


    // $resultado = Select();
    
    // foreach($resultado as $chave => $valor){
        
    //     echo $valor['nome'];
    //     echo ' - ';
    //     echo $valor['descricao'];
    //     echo '<br/>';
    // }


    function BuscarAluno(){
        return Select();
    }

    ?>