<?php
//exec('wikistart &');
//following code does not want to start up (?)

exec('wine /august/wiki06/ZenoReader.exe &> /dev/null &');
echo 'wine /august/wiki06/ZenoReader.exe &> /dev/null &<br>';
echo '<a href="http://';
echo $_SERVER["SERVER_ADDR"];
echo ':8080/">link</a>';
?>