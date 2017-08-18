<?php

//Database setup
defined('DB_SERVER') ? null : define("DB_SERVER", "localhost");
defined('DB_USER') ? null : define("DB_USER", "admin");
defined('DB_PASS') ? null : define("DB_PASS", "1234abc");
defined('DB_NAME') ? null : define("DB_NAME", "stud_details");

$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if(!$connection) { die("Database connection failed: ". mysqli_error($connection)); }

$sql = "SELECT * FROM stud_details WHERE id=1 LIMIT 1";
$row = mysqli_query($connection, $sql);
if(!$row) {
  die("Database query failed: ". mysqli_error($connection))
}

$stud_details = [];
while($result = mysqli_fetch_assoc($row)) {
  $stud_details[] = $result;
}

function fullname("$firstname", "$lastname") {
  echo $tud_details['firstname'] ." ". $stud_details['lastname'];
}

?>

  
  
  
  
