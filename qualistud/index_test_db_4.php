<?php
@$db = new mysqli('localhost', 'root', 'Sinux10', 'testbank');

if (mysqli_connect_errno()) {
  printf("Connection refused: %s\n", mysqli_connect_error());
  exit();
}

if ($result = $db->query('SELECT * FROM town ORDER by id')) {
  while($data = $result->fetch_object() ){
    echo "ID: ". ($data->id) . " ";
    echo ($data->name);
    echo " people: "  . ($data->dens) . "<br>";
  }  
  $result->close();
} else {
  echo "No datasets found!";
}

$db->close();
?>