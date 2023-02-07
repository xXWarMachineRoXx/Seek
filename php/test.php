

<?php
function console_log($output, $with_script_tags = false) {
  $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
  if ($with_script_tags) {
      $js_code = '<script>' . $js_code . '</script>';
  }
  echo $js_code;
}

  //Below is a script used to upload file in php 
// with the help of $_FILES constant
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  console_log("Sorry, your file was not uploaded.") ;
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    console_log("The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.");
  } 
}
?>