<?php include_once '../Controller/exemplo.php';
/*$resultado = array(
    0 => array('exemplo'=> 'teste'),
    1 => array('exemplo'=> 'teste'),
    2 => array('exemplo'=> 'teste'),
    3 => array('exemplo'=> 'teste'),
    4 => array('exemplo'=> 'teste'),
    5 => array('exemplo'=> 'teste'),
    6 => array('exemplo'=> 'teste'),
);*/


$resultado = BuscarAluno();
// var_dump($resultado);
// die;
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<form action="iserir.php" method="get">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body class='container'>
        <div class="d-grid gap-2 col-6 mx-auto">
            <h1 class="col-9">Dados da Tabela</h1>
            <a class="btn btn-primary" href="iserir.php" role="button">Inserir</a>        </div>
        <table class="table table-striped">



            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">nome</th>
                    <th scope="col">nome_item</th>
                    <th scope="col">preco</th>
                    <th scope="col">quantidade</th>
                    <th scope="col">snome</th>
                    
                </tr>
            </thead>
            <tbody>

                <?php
                //  var_dump($resultado);
                foreach ($resultado as $chave => $valor) {
                    // var_dump($valor);
                    // echo '<br/>';

                    echo '<tr>';
                    echo  "<th scope='row'>" . $valor['id'] . "</th>" ;
                    echo "<td>" . $valor['nome'] . "</td>";
                    echo "<td>" . $valor['nome_item'] . "</td>";
                    echo "<td>" . $valor['preco'] . "</td>";
                    echo "<td>" . $valor['quantidade'] . "</td>";
                    echo "<td>" . '<a class="btn btn-outline-secondary btn-sm" href="iserir.php?Id=' . $valor['id']. '" role="button">editar</a>        ' . '<button type="submit" class="btn btn-outline-danger btn-sm">deletar</button>' . "</td>";
 
                    // echo $valor['nome'];
                    // echo ' - ';
                    // echo $valor['descricao'];
                    echo '</tr>';
                }
                

                ?>

            </tbody>

        </table>
    </body>
</form>

</html>