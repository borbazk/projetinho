<?php 
error_reporting(E_ERROR | E_PARSE | E_NOTICE);
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
</head>

<body class='container'>
  <form method="get" action="../Controller/corrigido.php?Acao=<?= $_GET['acao'] ?> ">
    
    <?php
   
    include_once '../Conexao/BancoD.php';



    // $ResultadoDoBanco = [ 0 =>
    //   array(
    //     'a' => "$nome",
    //     'b' => "$item",
    //     'c' => "$preco", 
    //     'd' => "$quantidade",
    //   ),
    // ];
    //var_dump($_GET['nome']);

    if ($_GET['acao'] == 'editar') {
      $ResultadoDoBanco =  selectPorId($_GET['Id']);
     
      $nome       =$ResultadoDoBanco[0]['nome'] ?? ''; 
      $nomeItem       =$ResultadoDoBanco[0]['nome_item'] ?? ''; 
      $preco      =$ResultadoDoBanco[0]['preco'] ?? ''; 
      $qtd      =$ResultadoDoBanco[0]['quantidade'] ?? '';
    } 
    
    
    //var_dump($ResultadoDoBanco);
    ?>

    <h1 class="col-8">Mercearia Forge</h1>
    <input type="hidden" name="id" value="<?= $_GET['Id'] ?>">
    <div class="col-sm-6 ">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" name='nome' class="form-control" id="nome" placeholder="" value='<?=$nome?>' required>
      <input type="text" name='acao' class="form-control" id="acao" placeholder="" value='<?=$_REQUEST['acao']?>' hidden>
    </div>
    <div class="col-sm-6">
      <label for="item" class="form-label">Item</label>
      <input type="text" class="form-control" name='item' id="item" placeholder="" value='<?=$nomeItem ?>' required>
    </div>
    <div class="col-sm-6">
      <label for="preco" class="form-label">Preço do Item</label>
      <input type="number" class="form-control" id="preco" name='preco' placeholder="" min="0" max="999999999999999999.99" value='<?=$preco ?>' required>
    </div>
    <div class="col-sm-6">
      <label for="qtd" class="form-label">Quantidade</label>
      <input type="number" class="form-control" id="qtd" placeholder="" name='quant' min="0" value='<?=$qtd ?>' required>
      <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-primary" href="tabela.php" role="button">Voltar</a>
      </div>
  </form>
</body>


</html>