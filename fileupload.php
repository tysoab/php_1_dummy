<?php
session_start();

require __DIR__ . '/app/account/fileupload_script.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/dad8ebce2d.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/login.css">

    <title>Course || php</title>
  </head>
  <body>
    <?php include(__DIR__ . '/header.php'); ?>

    <main>
      <section class="">
        <h2>Php file upload:</h2>

        <form action="" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="file">Image:</label>
            <input type="file" name="fileToUpload" id="file">
          </div>

          <div class="control-action">
            <button type="submit">Upload</button>
          </div>
        </form>

      </section>

      
      <?php if(isset($fileName)) :?>
        <div style="width: 300px; margin: 20px auto;">
          <img src="upload/<?= $fileName ?>" alt="<?= $fileName ?>" width="100%">
        </div>
      <?php endif ?>

    </main>
  </body>
</html>
