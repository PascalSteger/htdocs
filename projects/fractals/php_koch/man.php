<?php
include('counter.php');

if(!isset($_GET['n'])){$n=7;}else{$n=$_GET['n'];}

exec("./src/koch $n");
$image = imagecreatefrompng('./out.png');
header('Content-Type: image/png');
imagepng( $image );

?>
