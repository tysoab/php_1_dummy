<?php
function handleFile(){
  $target_dir = "../../upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$ext = explode(".", $_FILES['fileToUpload']['name']);
$fileName = "tech_hub_" . round(microtime(true)) . '.'. end($ext);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
}

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$ext = explode(".", $_FILES['fileToUpload']['name']);
$fileName = "tech_hub_" . round(microtime(true)) . '.'. end($ext);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // check if file is image or fake
  // $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  // if(!$check) return print 'Not an image';


  // Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
  return;
}

  // Check file size 1000kb
if ($_FILES["fileToUpload"]["size"] > 1000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
  return;
}

// if($uploadOk){
//     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//       echo 'Successful';
//   } else {
//     echo "Sorry, there was an error uploading your file.";
//   }
// }

// change file name

if($uploadOk){
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$fileName)) {
     
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

  // exit;
}