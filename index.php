<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Adoção de Animais</title>
</head>
<body>
  <div class="container">
    <?php if (!empty($_GET['msgErro'])) {?>
      <div class="alert alert_warning" role="alert" >
        <?php echo $_GET['msgErro']; ?>
      </div>
    <?php } ?>

    <?php if (!empty($_GET['msgSucesso'])) {  ?>
      <div class="alert alert_success" role="alert" >
        <?php echo $_GET['msgSucesso']; ?>
      </div>
    <?php } ?>
  </div>
  <div class="container" >
    <h1>Sistema de Adoção</h1>
    <form class="" action="" method="post">
      <div class="col-4">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" class="form-control">
      </div>
      <div class="col-4">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" class="form-control">
      </div><br>
      <button type="submit" name="enviarDados" class="btn btn-primary">Entrar</button>
      <a href="cad_usuario.php" class="btn btn-warning">Cadastrar-se</a>
    </form>
  </div>
</body>
</html>