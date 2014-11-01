<?php

@$db = new mysqli('localhost', 'root', 'Sinux10', 'testbank');

if (mysqli_connect_errno()) {
  printf("Connection refused: %s\n", mysqli_connect_error());
  exit();
}

$sql_instr = "CREATE TABLE IF NOT EXISTS town (
id INT(11) NOT NULL AUTO_INCREMENT,
name VARCHAR(50) DEFAULT NULL,
dens FLOAT DEFAULT NULL,
PRIMARY KEY (id)
)";

if ($db->query($sql_instr)) {
  echo "Table successfully created.";  
} else {
  echo "Table not created!";
}

$db->close();

?>