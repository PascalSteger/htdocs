 <?php
include("header.inc.php");
echo '<h1>Administration Students</h1>';

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

  // create table of students
  //$db->select_db("qualistud");
  $sql_instr = "create table if not exists qualistud.students(
    id int unsigned auto_increment,
    firstname varchar(30) not null,
    lastname varchar(30) not null,
    class varchar(30) not null,
    quali_1 int unsigned not null,
    primary key(id)
  );";
  $db->query($sql_instr);

  //enter new teacher
  if(isset($_POST['firstname'])&&isset($_POST['lastname'])&&isset($_POST['class'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $class = $_POST['class'];

    $sql_instr = 'insert into qualistud.students(firstname, lastname, class) values ("'.$firstname.'", "'.$lastname.'", "'.$class.'")';
    echo $sql_instr;
    $db->query($sql_instr);
  }
  else
    echo 'No input yet!<br>';

  //show query for entering new student values
echo '<form method="post">
Name: <input type="text" name="firstname"> <input type="text" name="lastname"><br>
Class: <input type="text" name="class"><br>
<input type="hidden" name="pwd" value="'.$pwd.'">
<input type="submit" value="GO">
</form><br>';

//echo '<p>Go on to <a href="m_setup_students.php">class setup</a>.</p>';
  $db->close();

include("counter.php");
include("../footnote.inc.php");
include("../tail.inc.php");
?>