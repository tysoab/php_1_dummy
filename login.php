
<?php include(__DIR__ . '/app/account/login_script.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script defer src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>
  <script defer src="js/validate.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/login.css">
  <title>Login page || php</title>
</head>
<body>
<?php require_once(__DIR__ . '/header.php'); ?>

<main>
  <section class="login-section">
    <h1>Welcome back, login to continue...</h1>

    <?php if($errorMsg) print $errorMsg; ?>

    <form action="" method="POST" id="login">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?= ($_POST['email']) ??'' ?>">
      </div>
      <div class="form-group">
        <label for="password">password</label>
        <input type="password" name="password" id="password">
      </div>

      <div class="remember-login">
        <input type="checkbox" name="rememeber">
        <label for="remember">Remember my Login</label>
      </div>

      <div class="control-action">
        <button type="submit">Login</button>
      </div>
    </form>

    <div class="no-account">
      <p>
        Don't have an Account!, <a href="signup.php">Click here to create account</a>
      </p>
    </div>
  </section>
</main>
  
</body>
</html>