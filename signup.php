
<?php include(__DIR__ . '/app/account/signup_script.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/login.css">
  <title>registration page || php</title>
</head>
<body>
<?php require_once(__DIR__ . '/header.php'); ?>

<main>
  <section class="login-section">
    <h1>Create an account with us today</h1>

    <?php if($errorMsg) print $errorMsg; ?>

    <form action="" method="POST">
      <div class="form-group">
        <label for="firstname">First name</label>
        <input type="text" name="firstname" value="<?= ($_POST['firstname']) ??'' ?>">
      </div>
      <div class="form-group">
        <label for="lastname">Last name</label>
        <input type="text" name="lastname" value="<?= ($_POST['lastname']) ??'' ?>">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" value="<?= ($_POST['email']) ?? '' ?>">
      </div>
      <div class="form-group">
        <label for="password">password</label>
        <input type="password" name="password">
      </div>


      <div class="control-action">
        <button type="submit">Submit</button>
      </div>
    </form>

    <div class="no-account">
      <p>
        Already have an Account!, <a href="login.php">Click here to login</a>
      </p>
    </div>
  </section>
</main>
  
</body>
</html>