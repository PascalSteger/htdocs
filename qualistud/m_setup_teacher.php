 <?php
include("header.inc.php");
echo '<h1>Administration</h1>';

 echo 'Password entered, trying to enter MySQL...';
  $pwd = $_POST['pwd'];
  @$db = new mysqli("localhost", "root", $pwd);

  if (mysqli_connect_errno()) {
    printf("Connection refused: %s\n", mysqli_connect_error());
    exit();
  }

  // create database
  $sql_instr = "create database if not exists qualistud";
  $db->query($sql_instr);

  // create table of teachers
  //$db->select_db("qualistud");
  $sql_instr = "create table if not exists qualistud.teachers(
    id int unsigned auto_increment,
    shortcut varchar(2) not null,
    firstname varchar(30) not null,
    lastname varchar(30) not null,
    classes varchar(30) not null,
    primary key(id),
    unique(shortcut)
  );";
  $db->query($sql_instr);

  //enter new teacher
  if(isset($_POST['shortcut'])&&isset($_POST['firstname'])&&isset($_POST['lastname'])&&isset($_POST['classes'])&&isset($_POST['tpwd'])) {
    $shortcut = $_POST['shortcut'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $classes = $_POST['classes'];
    $tpwd = $_POST['tpwd'];

    $sql_instr = 'insert into qualistud.teachers(shortcut, firstname, lastname, classes) values ("'.$shortcut.'", "'.$firstname.'", "'.$lastname.'", "'.$classes.'")';
    echo $sql_instr;
    $db->query($sql_instr);

    //enter new mysql user
    $db->select_db("mysql");
    $sql_instr = 'insert into mysql.user(host,user,password) values ("localhost", "'.$shortcut.'","'.$tpwd.'")';
    $db->query($sql_instr);
  }
  else
    echo 'No input yet!<br>';

  //show teachers known so far
  //for($i=0; $i<
  //show query for entering new teacher values
echo '<form method="post">
Shortcut: <input type="text" name="shortcut">, Name: <input type="text" name="firstname"> <input type="text" name="lastname"><br>
Classes: <input type="text" name="classes"><br>
Password: <input type="password" name="tpwd"><br>
<input type="hidden" name="pwd" value="'.$pwd.'">
<input type="submit" value="GO">
</form><br>';

echo '<p>Go on to <a href="m_setup_student.php">student setup</a>.</p>';
  $db->close();

include("counter.php");
include("../footnote.inc.php");
include("../tail.inc.php");
?>