<?php
//header('Location: index_cookie.php');
if(!isset($_POST['name'])||!isset($_POST['year'])) {
 echo '<html><body>
	<h1>Need input!</h1><br>
	<form method="post">
	  Name: <input type="text" name="name" value="unknown">
	  Born: <input type="text" name="year" value="1900">

	  <input type="submit" value="Tell me!">
	</form></body></html>';
}
else {
 setcookie('s_timestamp',base64_encode(microtime()));    // name, value, lifetime in sec
 setcookie('s_name',base64_encode($_POST['name']));
 setcookie('s_year',base64_encode($_POST['year']));

 echo '<html><body>Got info. Hi, '.$_POST['name'].'! You are '.(2009-$_POST['year']).' years old by now, am I right?</body></html>';
}

?>