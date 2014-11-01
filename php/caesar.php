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

function caesar($str, $offs) {
  $nstr = '';
  for($i=0; $i<strlen($str); ++$i) {
    $nstr = $nstr.chr(ord('a')+mod(ord($str[$i])-ord('a')+$offs,26));
  }
  return $nstr;
}


if(!isset($_POST['offset'])||!isset($_POST['cleartext'])) {
 echo '<html><body>set offset 
<form method="post">
offset:    <input type="text" name="offset" value="4"><br/>
cleartext: <input type="text" name="cleartext"><br/>
<input type="submit" value="Encrypt">
</form>
</body></html>';
}
else
{
 $offset = $_POST['offset'];
 $sec = caesar(to_lower(remove_unwanted($_POST['cleartext'])),$offset);
 echo '<html><body>sec: '.$sec.'</body></html>';
}
?>