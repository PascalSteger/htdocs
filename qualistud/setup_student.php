<?php
 echo '
<html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<title>Lehrer Setup</title>
  <meta name="AUTHOR" content="Pascal Stephan Philipp Steger">
  <meta http-equiv="Content-Type" content="text/html; charset="UTF-8">
  <meta name="KEYWORDS" content="Setup Schüler">
  <link rel="stylesheet" type="text/css" href="../main.css">
</head>

<body>

<h1>Setup Schüler</h1>
<form action="setup_student.php">
Name des Schülers: 
<input type="text" name="Name" value="">
<br>
Hier kommt später eine Gliederung mithilfe einer Tabelle hin!<br>
Konfliktbewältigung:
<br>
<input type="radio" name="konflikt" value="1"> ungenügend<br>
<input type="radio" name="konflikt" value="2"> genügend<br>
<input type="radio" name="konflikt" value="3"> gut<br>
<input type="radio" name="konflikt" value="4"> sehr gut<br>
<br>
Sozialkompetenz:<br>
<input type="radio" name="sozial" value="1"> ungenügend<br>
<input type="radio" name="sozial" value="2"> genügend<br>
<input type="radio" name="sozial" value="3"> gut<br>
<input type="radio" name="sozial" value="4"> sehr gut<br>
<br>
<input type="submit" value="Fertig">
<input type="reset" value="Abbrechen">
<br>
</form>
<br>


</body>
</html>
';

