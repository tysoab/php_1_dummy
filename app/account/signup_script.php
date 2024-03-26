<?php
$errorMsg = false;
$firstname = '';
$lastname = '';
$email = '';
$password = '';

if($_SERVER['REQUEST_METHOD'] === 'POST')
{

  $firstname = (string) htmlspecialchars($_POST['firstname']);
  $lastname = (string) htmlspecialchars($_POST['lastname']);
  $email = (string) htmlspecialchars($_POST['email']);
  $password = (string) htmlspecialchars($_POST['password']);

  if(empty($firstname) || empty($lastname) || empty ($email) || empty($password)){
    $errorMsg = '<p class="error-msg">All fields is required!</p>';
    return;
  }

  $hash_passowrd = password_hash($password, PASSWORD_DEFAULT);
  require __DIR__ . '/dbconnection.php';
  // insert into db

$sql = ("INSERT INTO USER (firstname, lastname, email, password) VALUES(?, ?, ?, ?)");

$stmt = $conn->prepare($sql);
$stmt ->bind_param("ssss", $firstname, $lastname, $email, $hash_passowrd);

$stmt->execute();
$stmt->close();
$conn->close();

header('Location: ./login.php');

}