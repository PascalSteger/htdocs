<?php
use POSIX;

function open($str_date){
	 $now = time();
	 $ope = strtotime($str_date);
	 $tims=floor(($ope-$now)/3600.0/24.0+1.0);

	 if($tims>0){
		return false;
         } else {
		return true;
	 }
 }

function sleepy($str_date){
	 $now = time();
	 $ope = strtotime($str_date);
	 $tims=floor(($ope-$now)/3600.0/24.0+1.0);

	 return $tims;
 }


function door($str_date){
	 $now = time();
	 $ope = strtotime($str_date);
	 $tims=floor(($ope-$now)/3600.0/24.0+1.0);

	 if($tims>0){
		return "present.png";
         } else {
		return "love.png";
	 }
 }


function table(){
echo '<table>';

for ($digit=1;$digit<25;$digit=$digit+1){
    $str='';
    $dd=str_pad($digit,2,'0',STR_PAD_LEFT);
    $ddd=$dd." December 2011";
    if($digit%6==1){
	$str=$str.'<tr>';
    }
    $str=$str.'<td><a href="./';
    $str=$str.$dd;
    $str=$str.'/index.php"><img src="../src/';
    $str=$str.door($ddd);
    $str=$str.'"></a></td>';
    if($digit%6==0){
	$str=$str.'</tr>';
    }
    echo $str;
}
echo '</tr></table>';
}

?>