<?php
#count hits
$fp=fopen('counts.txt', 'a');
$inhalt=file('counts.txt');
ftruncate($fp,0);
$inhalt=$inhalt[0]+1;
fputs($fp, $inhalt);
fclose($fp);
?>