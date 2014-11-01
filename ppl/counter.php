<?php
#count hits
$fp=fopen('counts.txt', 'a');
$inhalt=file('counts.txt');
ftruncate($fp,0);
$inhalt=$inhalt[0]+1;
fputs($fp, $inhalt);
fclose($fp);

$to = "psteger@phys.ethz.ch";
$subject = "n ".$_SERVER['REMOTE_HOST'];
$message='<body><table>';
foreach($_SERVER as $k => $v) {
        $message = $message.'<tr><td>'$k.'</td><td>'.$v."<tr>\n";
}
$message='</table></body>'
$from = "mariposa@lu.ch";
$headers = "From: $from";
mail($to,$subject,$message,$headers);
?>
