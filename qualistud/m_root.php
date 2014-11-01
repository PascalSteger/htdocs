<?php
include("header.inc.php");
echo '<h1>Administration</h1>';

if(!isset($_POST['pwd'])) {
 echo 'Enter root password: 
<form method="post" action="m_setup_teacher.php">
<input type="password" size="10" maxlength="20" name="pwd">

<input type="submit" value="GO">
</form>';
} else {
 echo 'ELSE activated.';
}

include("counter.php");
include("../footnote.inc.php");
include("../tail.inc.php");
?>