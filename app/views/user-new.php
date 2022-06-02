<?php require 'header.php'; ?>
<div class="row">
  <div class="col-12">
    <form action="/app/controllers/UserControllerStore.php" method="post">
      <input class="form-control my-2" type="text" require name="name" placeholder="Nome">
      <input class="form-control my-2" type="email" require name="email" placeholder="E-Mail">
      <input class="form-control my-2" type="password" require name="password" placeholder="Senha">
      <div class="d-flex justify-content-center">
        <button class="btn btn-primary mx-2">Criar</button>
        <a href="/users" class="btn btn-secondary">Voltar</a>
      </div>
    </form>
  </div>
</div>
<?php require 'footer.php' ?>