<?php

@$db = new mysqli('localhost', 'root', 'Sinux10', 'testbank');

if (mysqli_connect_errno()) {
  printf("Connection refused: %s\n", mysqli_connect_error());
  exit();
}

$sql_instr = "
INSERT INTO town
(id, name, dens)
VALUES
('', 'New York', 100),
('', 'Berlin', 75)";

if ($db->query($sql_instr)) {
  echo "Sets inserted.";  
} else {
  echo "Sets not inserted!";
}

$db->close();

?>