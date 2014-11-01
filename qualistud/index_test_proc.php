<?php
@$db = mysqli_connect("localhost", "root", "Sinux10", "test");

if (mysqli_connect_errno()) {
  printf("Connection refused: %s\n", mysqli_connect_error());
  exit();
}

$instruction= mysqli_query($db, "SELECT version() AS version");

$result = mysqli_fetch_assoc($instruction);

echo "We're working with MySQL version {$resultat['version']}";

mysqli_close($db);
?>