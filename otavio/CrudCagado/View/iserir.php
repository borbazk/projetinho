<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
</head>

<body>
  <form method="get" action="../Controller/corrigido.php" class="container">
    <h1 class="col-8">Mercearia Forge</h1>
    <div class="col-sm-6">
      <label for="firstName" class="form-label">Nome</label>
      <input type="text" name='nome' class="form-control" id="firstName" placeholder="" value="" required>
      <div class="invalid-feedback">
      </div>
    </div>
    <div class="col-sm-6">
      <label for="lastName" class="form-label">Item</label>
      <input type="text" class="form-control" name='item' id="lastName" placeholder="" value="" required>
    </div>
    <div class="col-sm-6">
      <label for="lastName" class="form-label">Preço do Item</label>
      <input type="text" class="form-control" id="lastName" name='preco' placeholder="" value="" required>
    </div>
    <div class="col-sm-6">
      <label for="lastName" class="form-label">Quantidade</label>
      <input type="text" class="form-control" id="lastName" placeholder="" name='quant' value="" required>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
    <div>
      <a class="btn btn-primary" href="tabela.php" role="button">Voltar</a>
    </div>
    </div>
    <input type="submit" value="Enviar" />
  </form>
</body>

</html>