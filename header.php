<header>
  <div class="logo">
    <a href="index.php">Techhub</a>
  </div>
  <nav>
    <li><a href="../dummy/">Home</a></li>
    <li><a href="fileupload.php">Courses</a></li>
    <li><a href="advice.php">Advice</a></li>
    <?php if(isset($_SESSION['id'])) :?>
      <li><a href="app/account/logout_script.php">Logout</a></li>
    <?php else :?>
    <li><a href="../dummy/login.php">Login</a></li>
    <?php endif ?>
    <?php if(!isset($_SESSION['id'])) :?>
      <div class="register">
      <a href="signup.php">Signup</a>
    </div>
      <?php endif ?>
  </nav>

</header>