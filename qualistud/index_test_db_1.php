<?php

@$db = new mysqli("localhost", "root", "Sinux10");

if (mysqli_connect_errno()) {
  printf("Connection refused: %s\n", mysqli_connect_error());
  exit();
}

$sql_instr = "CREATE DATABASE IF NOT EXISTS testbank";

if ($db->query($sql_instr)) {
  echo "Database successfully created.";  
} else {
  echo "Database not created!";
}

$db->close();

?>