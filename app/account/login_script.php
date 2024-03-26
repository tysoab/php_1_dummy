<?php
declare(strict_types = 1);

$email = '';
$password = '';
$errorMsg = '';

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $email =(string)  htmlspecialchars($_POST['email']);
  $password =(string)  htmlspecialchars($_POST['password']);

  if(empty ($email) || empty($password)){
    $errorMsg = '<p class="error-msg">All fields is required!</p>';
    return;
  }

  // else retrieve user account from db
  // store user session
  // redirect user
  require __DIR__ . '/dbconnection.php';
  $sql = sprintf("SELECT * FROM user WHERE email = '%s'", $conn->real_escape_string($_POST['email']));

  $result = $conn->query($sql);
  $user = $result->fetch_assoc();

  if($user){

    if(password_verify($_POST['password'], $user['password'])){
      session_start();
      $_SESSION['id'] = $user['id'];
    }
  }


  if(isset($_SESSION['id'])) header('Location: ./index.php');

  $conn->close();
}

?>