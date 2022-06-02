<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <title>Sistema de Usuarios</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Entrar sistema de usuarios</h1>
        <form action="app/controllers/LoginControllerStore.php" method="post">
          <input type="email" require name="email" placeholder="E-Mail" class='form-control my-2' >
          <input type="password" require name="password" placeholder="Senha" class='form-control my-2'>
            <div class="d-flex justify-content-center">
            <button class="btn btn-primary">Entrar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>