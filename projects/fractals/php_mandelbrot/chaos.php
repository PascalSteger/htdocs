<?php
/*
function fac($n) {
	if($n==0){return 1;}
	elseif($n==1){return 1;}
	elseif($n==2){return 2;}
	elseif($n==3){return 6;}
	elseif($n==4){return 24;}
	elseif($n==5){return 120;}
	elseif($n==6){return 720;}
	else
	{
		return $n*fac($n-1);
	}
}


function npr($n, $p) {
if($n<$p){$xx=$n;$n=$p;$p=$xx;}
if($p==0){return 1;}
if($n==$p){return 1;}
return fac($n)/(fac($p)*fac($n-$p));
}

function is_outside_n($rec, $imc, $n, $level) {
	$im=$imc;
	$re=$rec;

	for($j=0;$j<$level;++$j) {
		if($re*$re+$im*$im > 256){
			return $j;
		}
		$reold=$re;
		$imold=$im;
		for($k=0;$k<=$n;++$k) {
			if($k%4==0) {$re+=npr($n, $k)*pow($reold, $n-$k)*pow($imold, $k);}
			elseif($k%4==1) {$im+=npr($n, $k)*pow($reold, $n-$k)*pow($imold, $k);}
			elseif($k%4==2) {$re-=npr($n, $k)*pow($reold, $n-$k)*pow($imold, $k);}
			elseif($k%4==3) {$im-=npr($n, $k)*pow($reold, $n-$k)*pow($imold, $k);}
		}
	}
	return $j;
}
*/
function is_outside($rec, $imc, $level) {

	$im=$imc;
	$re=$rec;

	for($j=0;$j<$level;++$j){
		$re2=$re*$re;
		$im2=$im*$im;
		if($re2+$im2 > 256){
			return $j;
		}
		$im=2*$re*$im+$imc;
		$re=$re2-$im2+$rec;
	}
	return $j;
}

// width of output image, square
if(!isset($_GET['wx'])){$wx=1024/10;}else{$wx=$_GET['wx'];}
if(!isset($_GET['wy'])){$wy=768/10;}else{$wy=$_GET['wy'];}

//Bild initialisieren
$image=imagecreate($wx,$wy);
// fill with background color, black
imagefill($image,0,0,0);
if(!isset($_GET['r'])){$r=2.0;}else{$r=$_GET['r'];}
if(!isset($_GET['recen'])){$recen=0.0;}else{$recen=$_GET['recen'];}
if(!isset($_GET['imcen'])){$imcen=0.0;}else{$imcen=$_GET['imcen'];}
$s=2.0*$r/$wx;

// generate color palette from black to white
$pi = 3.1416;
$steps = 256/6;
for($i=0,$rr=0,$gg=0,$bb=0; $i<255; ++$i) {
//schönes grau
// 	$xx = 255*abs(sin(2*$pi*$i/255));
// 	$yy = 255*abs(sin(2*$pi*$i/255));
// 	$zz = 255*abs(sin(2*$pi*$i/255));
//alien-grün
// 	$rr = 255*abs(sin($pi*$i/255))*exp(-$i); $rr%=255;
// 	$gg = 255*abs(sin($pi*$i/255)); $gg%=255;
// 	$bb = 255*abs(sin($pi*$i/255))*exp(-$i); $bb%=255;
//Regenbogen (?)
// 	if($i<1*$steps){ $dirr = 0;$dirg = +1;$dirb = 0;}
// 	elseif($i<2*$steps){$dirr=-1;$dirg=0;$dirb=0;}
// 	elseif($i<3*$steps){$dirr=0;$dirg=0;$dirb=1;}
// 	elseif($i<4*$steps){$dirr=0;$dirg=-1;$dirb=0;}
// 	elseif($i<5*$steps){$dirr=1;$dirg=0;$dirb=0;}
// 	elseif($i<6*$steps){$dirr=0;$dirg=0;$dirb=-1;}
// 
// 	$rr += $dirr*$steps; $gg += $dirg*$steps; $bb += $dirb*$steps;

	$rr = 255*abs(sin(2*$pi*$i/255)*exp(-$i));
	$gg = 255*abs(sin(2*$pi*$i/255));
	$bb = 255*abs(sin(2*$pi*$i/255)*exp(-$i));
	$col[$i] = imagecolorallocate($image,$rr,$gg,$bb);
}
for($y=0;$y<$wy;$y++){
	for($x=0;$x<$wx;$x++){
		$rec=1.0*$s*($x-$wx/2)+$recen;
		$imc=1.0*$s*($y-$wy/2)+$imcen;
// 		$scale=255-is_outside($rec, $imc, 255*(-log10($s)/2));
		$scale=255-is_outside($rec, $imc, 255);
// 		imagesetpixel($image, $x, $y, $col[($scale)%255]);
		imagesetpixel($image, $x-$scale/256, $y+$scale/256, $col[($scale)%255]);
	}
}

//Bild ausgeben
header ( 'Content-Type: image/gif' );
imagegif ( $image );


?>