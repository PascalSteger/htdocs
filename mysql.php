<?php
 echo '
<html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<title>Lehrer Setup</title>
  <meta name="AUTHOR" content="Pascal Stephan Philipp Steger">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="KEYWORDS" content="Setup Lehrer">
  <link rel="stylesheet" type="text/css" href="../main.css">
</head>

<body>

<h1>Setup Lehrer</h1>
<form action="setup_schüler.php">
Name des Lehrers:
<input type="text" name="Name" value="Namen eingeben!"><br>
Kürzel:
<input type="text" name="Kürzel" value="Kürzel eingeben!"><br>
Klasse:
<input type="text" name="Klasse" value="Klasse eingeben!"><br>
Anzahl Schüler:
<input type="text" name="Schülerzahl" value="Anzahl eingeben!"><br>
<input type="submit" value="Fertig">
<input type="reset" value="Abbrechen">
<br>

</form>
<br>


</body>
</html>
';
 $user = "psteger";
 $password = "Pinux10";
 $host = "localhost";
 $sql = "select curdate() as today";
 $dbh = mysql_connect($host, $user, $password);
 $res = mysql_query($sql, $dbh);
 if($res)
  $row = mysql_fetch_assoc($res);
 mysql_close($dbh);
 echo $row['today'];


?>