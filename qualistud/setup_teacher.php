<?php
 echo '
<html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<title>Lehrer Setup</title>
  <meta name="AUTHOR" content="Pascal Stephan Philipp Steger">
  <meta http-equiv="Content-Type" content="text/html; charset="UTF-8">
  <meta name="KEYWORDS" content="Setup Lehrer">
  <link rel="stylesheet" type="text/css" href="../main.css">
</head>

<body>

<h1>Setup Lehrer</h1>
<form action="setup_student.php">
Name des Lehrers:
<input type="text" name="Name" value="Markus Holstein"><br>
Kürzel:
<input type="text" name="Kürzel" value="mh"><br>
Klasse:
<input type="text" name="Klasse" value="4d!"><br>
Anzahl Schüler:
<input type="text" name="Schülerzahl" value="10"><br>
<input type="submit" value="Fertig">
<input type="reset" value="Abbrechen">
<br>

</form>
<br>


</body>
</html>
';
 $user = "psteger";
 $password = "Einu8baeM";
 $host = "localhost";
 $sql = "select curdate() as today";
 $dbh = mysql_connect($host, $user, $password);
 $res = mysql_query($sql, $dbh);
 if($res)
  $row = mysql_fetch_assoc($res);

 $sql = "create  table if not exists website.teachers (
  table_key int unsigned auto_increment,
  get_name varchar(50) not null,
  
  name varchar(50) not null,
  christian varchar(50) not null,
  initials varchar(2) not null,
  classes blob default '',
  
  primary key(table_key),
  unique(get_name),
  key(initials)
 )";
 $res = mysql_query($sql, $dbh);
 mysql_close($dbh);
 echo $row['today'];
 echo $res;


?>