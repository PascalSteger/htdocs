<?php
if(isset($_GET['recen']))
  $recen=$_GET['recen'];
else
  $recen=0.0;

if(isset($_GET['imcen']))
  $imcen=$_GET['imcen'];
else
  $imcen=0.0;

if(isset($_GET['r']))
  define('R', $_GET['r']/exp(1));
else
  define('R', exp(1));

if(isset($_GET['wx']))
  define('WX', $_GET['wx']);
else
  define('WX', 300);

if(isset($_GET['wy']))
  define('WY', $_GET['wy']);
else
  define('WY', 200);

if(isset($_GET['x']))
  define('X', $_GET['x']);
else
  define('X', WX/2);

if(isset($_GET['y']))
  define('Y', $_GET['y']);
else
  define('Y', WY/2);

define('S', 2.0*exp(1)*R/WX);


echo '
<html>
<head>
  <title>Interactive Mandelbrot set</title>
  <meta name="AUTHOR" content="Pascal Stephan Philipp Steger">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="KEYWORDS" content="scripts section">
  <link rel="stylesheet" type="text/css" href="../../main.css">
</head>

<body>
<h1>Mandelbrot</h1>';
include("../../navigation.inc.php");
echo '
<form>
window dimensions:<br>(&nbsp;<input type="text" name="wx" value="'.WX.'">,<br><input type="text" name="wy" value="'.WY.'">&nbsp;)<br><br>
Radius r = &nbsp;&nbsp;&nbsp;<input type="text" name="r" value="'.R.'"><br><br>
z = &nbsp;&nbsp;<input type="text" name="recen" value="';echo $recen=S*(X-WX/2)+$recen;echo '">&nbsp; + i * &nbsp;<input type="text" name="imcen" value="';echo $imcen=S*(Y-WY/2)+$imcen;echo '"><br><br>
<input type="submit" value="Send query for values entered above"> or click into the picture.<br><br>
<div style="text-align:center;vertical-align:middle;"><input type="image" src="./man.php?recen='.$recen.'&imcen='.$imcen.'&r='.R.'&wx='.WX.'&wy='.WY.'" ></div>
<a href="./index.php">Reset</a><br>
</form>';
echo '<div align="right">&copy; GPL v.3 Steger Pascal u. Benedikt</div>';
include("../../footnote.inc.php");
echo '</body></html>';
?>
