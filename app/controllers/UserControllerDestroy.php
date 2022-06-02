<?php

require '../database/index.php';

$id = $_POST['id'];

$sql = sqlDeleteUser($id);
query($sql);


header('Location: /users');

function sqlDeleteUser(int $id): string {
  return "DELETE FROM users WHERE id = {$id}; ";
}