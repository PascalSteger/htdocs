<?php
include("header.inc.php");
echo '<h1>Teacher</h1>';

if(!isset($_POST['shortcut'])||!isset($_POST['tpwd'])) {
 echo 'Enter your account information: 
<form method="post">
Shortcut: <input type="text" name="shortcut">
Password: <input type="password" size="10" maxlength="20" name="tpwd">

<input type="submit" value="GO">
</form>';
} else {
  echo 'Accessing account...';
  @$db = new mysqli("localhost", $shortcut, $tpwd);

  if (mysqli_connect_errno()) {
    printf("Connection refused: %s\n", mysqli_connect_error());
    //go back to entering account info
    header('Location: m_user.php');
  }
  echo "Successfully entered!";
  // select which class you want to qualify
  // then go on to m_quali_class.php, which presents user with all students in that class, and the possibility to give them a qualification each.
}

include("counter.php");
include("../footnote.inc.php");
include("../tail.inc.php");
?>