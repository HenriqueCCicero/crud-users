<?php require 'header.php'; ?>
<div class="row">
  <div class="col-12">
    <h1>Editar Usuario <?= $id ?></h1>
    <form action="/app/controllers/UserControllerUpdate.php" method="post">
      <input type="hidden" name="id" value="<?= $user['id']; ?>">
      <input class="form-control my-2" type="text" require name="name" placeholder="Nome" value="<?= $user['name']; ?>">
      <input class="form-control my-2" type="email" require name="email" placeholder="E-Mail" value="<?= $user['email']; ?>">
      <input class="form-control my-2" type="password" require name="password" placeholder="Senha" >
      <div class="d-flex justify-content-center">
        <button class="btn btn-primary mx-2">Atualizar</button>
        <a href="/users" class="btn btn-secondary">Voltar</a>
      </div>
    </form>
  </div>
</div>
<?php require 'footer.php' ?>