<?php
if(isset($_GET['n']))
  $n=$_GET['n'];
else
  $n=7;

echo '
<html>
<head>
  <title>Show Koch flake</title>
  <meta name="AUTHOR" content="Pascal Stephan Philipp Steger">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="KEYWORDS" content="scripts section">
  <link rel="stylesheet" type="text/css" href="../../main.css">
</head>

<body>
<h1>Koch flake</h1>';
include("../../navigation.inc.php");
echo '
<h2>&copy; GPL 3 Steger Pascal</h2>
<form>
recursion:&nbsp;&nbsp;<input type="text" name="n" value="'; echo $n; echo '"><br>
<input type="submit" value="Go!"><a href="./index.php">Reset</a><br><br>
<div style="text-align:center;vertical-align:middle;"><input type="image" src="./man.php?n='; echo $n; echo '"></div>
</form>';

include("../../footnote.inc.php");
echo '</body></html>';
?>
