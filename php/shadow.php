<?php
  if(isset($_GET['string'])) {
    $string = $_GET['string'];
    }
  else {
    $string = 'Text with a little 3D-effect...';
  }

  $img = imagecreate ( strlen($string)*20, 21 );
  imagecolorallocate ( $img, 255, 255, 255 );

  $blue = imagecolorallocate ( $img, 8, 93, 234 );
  $lightgray = imagecolorallocate ( $img, 166, 166, 166 );

  imagestring ( $img, 5, 6, 3, $string, $lightgray );
  imagestring ( $img, 5, 5, 2, $string, $blue );

  header ( 'content-type: image/png' );

  imagepng ( $img );

  image_destroy ( $img );
?>