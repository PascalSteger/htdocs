<?php
if(!isset($_POST['x'])) {
 echo '<html><body>set x 
<form method="post">
<input type="text" name="x" value="4">

<input type="submit" value="GO">
</form>
</body></html>';
}
else
{
 echo '<html><body>post x: '.$_POST['x'].'</body></html>';
}
?>