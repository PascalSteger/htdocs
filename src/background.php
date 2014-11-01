<?php
$whitedwarfs=50;
$greydwarfs=70;
$redgiants=10;
$bluegiants=10;
$galaxies=5;

srand((double)microtime()*1000000);
$whitedwarf = imagecreatefromgif("./whitedwarf.gif");
$greydwarf = imagecreatefromgif("./greydwarf.gif");
$redgiant = imagecreatefromgif("./redgiant.gif");
$bluegiant = imagecreatefromgif("./bluegiant.gif");
$galaxy = imagecreatefromgif("./galaxy.gif");

$dim_x = 700;
$dim_y = 200;

$image = imagecreate($dim_x,$dim_y);
// background color
$farbe_body=imagecolorallocate($image,2,2,10);

for($x=1;$x<$whitedwarfs;$x++){ImageCopy($image,$whitedwarf, rand(0,$dim_x),rand(0,$dim_y),0,0,1,1);}
for($x=1;$x<$greydwarfs;$x++){ImageCopy($image,$greydwarf, rand(0,$dim_x),rand(0,$dim_y),0,0,1,1);}
for($x=1;$x<$redgiants;$x++){ImageCopy($image,$redgiant, rand(0,$dim_x),rand(0,$dim_y),0,0,1,1);}
for($x=1;$x<$bluegiants;$x++){ImageCopy($image,$bluegiant, rand(0,$dim_x),rand(0,$dim_y),0,0,1,1);}
for($x=1;$x<$galaxies;$x++){ImageCopy($image,$galaxy, rand(0,$dim_x),rand(0,$dim_y),0,0,5,5);}

header("Content-Type: image/gif");
imagegif($image);
?>