<?php
require __DIR__ . '/vendor/autoload.php';



$handle = new \Verot\Upload\Upload($_FILES['image_field']);
// $auth = new \Delight\Auth\Auth($db);
if ($handle->uploaded) {
  $handle->file_new_name_body   = uniqid(rand(), true);
//   $handle->image_resize         = true;
//   $handle->image_x              = 100;
//   $handle->image_ratio_y        = true;
  $handle->process('images');
  if ($handle->processed) {
    echo 'image resized';
    $handle->clean();
  } else {
    echo 'error : ' . $handle->error;
  }
}