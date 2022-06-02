<?php require 'header.php'; ?>
<div class="d-flex justify-content-end">
  <a class="btn btn-success" href="/users/new">Criar Usuario</a>
</div>
<div class="row">
  <div class="col-12">
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Nome</th>
          <th>E-email</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($users as $user) : ?>
          <tr>
            <td><?= $user['id']; ?></td>
            <td><?= $user['name']; ?></td>
            <td><?= $user['email']; ?></td>
            <td>
              <form action="/app/controllers/UserControllerDestroy.php" method="post">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                <button class="btn btn-danger">Excluir</button>
              </form>
            </td>
            <td>
              <a class="btn btn-primary" href="/users/edit?id=<?= $user['id'] ?>">
                Editar
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

  </div>
</div>

<?php require 'footer.php'; ?>