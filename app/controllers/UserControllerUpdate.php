<?php

require '../database/index.php';

$id = intval($_POST['id']);
$name = $_POST['name'] ??null;
$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = sqlUpdateUser($id, $email, $password,$name);
query($sql);


header('Location: /users');

function sqlUpdateUser(int $id, string $email, string $password, ?string $name = 'NULL'): string {
  return "UPDATE `mysql-bootstrap`.users
  SET name='{$name}', email='{$email}', password='{$password}'
  WHERE id='{$id}';
   ";
}