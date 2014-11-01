<?php

function remove_unwanted($str) {
  $nstr = '';
  for($i=0; $i<strlen($str);++$i) {
    if(!(ord($str[$i])<ord('A')||ord($str[$i])>ord('z')))
	$nstr = $nstr.$str[$i];
  }
  return $nstr;
}

function to_lower($str) {
  $nstr = '';
  for($i=0; $i < strlen($str); ++$i) {
    if(ord($str[$i])>=ord('A') && ord($str[$i])<=ord('Z'))
	$nstr = $nstr.chr(ord($str[$i])-ord('A')+ord('a'));
    else
	$nstr = $nstr.$str[$i];
  }
  return $nstr;
}

function vign($str, $pwd) {
  $nstr = '';
  for($i=0; $i<strlen($str); ++$i) {
    $nstr = $nstr.chr(ord('a')+bcmod(ord($str[$i])-ord('a')+ord($pwd[bcmod($i,strlen($pwd))])-ord('a'),26));
  }
  return $nstr;
}


if(!isset($_POST['pwd'])||!isset($_POST['cleartext'])) {
 echo '<html><body>setup 
<form method="post">
password:    <input type="text" name="pwd"><br/>
cleartext: <input type="text" name="cleartext"><br/>
<input type="submit" value="Encrypt">
</form>
</body></html>';
}
else
{
 $pwd = to_lower(remove_unwanted($_POST['pwd']));
 $sec = vign(to_lower(remove_unwanted($_POST['cleartext'])),$pwd);
 echo '<html><body>sec: '.$sec.'</body></html>';
}
?>