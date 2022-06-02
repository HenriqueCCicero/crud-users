<?php

require '../database/index.php';

$name = $_POST['name'] ?? null;
$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = sqlNewUser($email, $password, $name);
query($sql);


header('Location: /users');

function sqlNewUser(string $email, string $password, ?string $name = 'NULL'): string
{
  return "INSERT INTO `mysql-bootstrap`.users
  (name, email, password)
  VALUES('{$name}', '{$email}', '{$password}');
  ";
}
