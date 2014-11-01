<?php
@$db = new mysqli("localhost", "root", "Sinux10", "test");

if (mysqli_connect_errno()) {
  printf("Connection refused: %s\n", mysqli_connect_error());
  exit();
}

$instruction = $db->query("SELECT version() AS version");

$result = $instruction->fetch_object();

echo "We're working with MySQL version {$result->version}";

$db->Close();
?>