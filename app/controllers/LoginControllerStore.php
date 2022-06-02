<?php
session_start();
require '../database/index.php';

$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = sqlCredentials($email, $password);
$users = query($sql);

if(!count($users)){
  header('Location: /login');
  exit;
}

$_SESSION['user'] = $users[0];
header('Location: /users');

function sqlCredentials(string $email, string $password): string {
  return "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'";
}