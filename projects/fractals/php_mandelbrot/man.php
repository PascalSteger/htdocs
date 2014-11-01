<?php
include('counter.php');

if(!isset($_GET['recen'])){$recen=0.0;}else{$recen=$_GET['recen'];}
if(!isset($_GET['imcen'])){$imcen=0.0;}else{$imcen=$_GET['imcen'];}
if(!isset($_GET['r'])){$r=2.0;}else{$r=$_GET['r'];}
if(!isset($_GET['wx'])){$wx=300;}else{$wx=$_GET['wx'];}
if(!isset($_GET['wy'])){$wy=200;}else{$wy=$_GET['wy'];}

exec("./src/mandelbrot $r $wx $wy $recen $imcen");
$image = imagecreatefrompng('./out.png');
header('Content-Type: image/png');
imagepng( $image );

?>
