<?php

//Database setup
defined('DB_SERVER') ? null : define("DB_SERVER", "localhost");
defined('DB_USER') ? null : define("DB_USER", "admin");
defined('DB_PASS') ? null : define("DB_PASS", "1234abc");
defined('DB_NAME') ? null : define("DB_NAME", "stud_details");

$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if(!$connection) { die("Database connection failed: ". mysqli_error($connection)); }

$sql = "SELECT * FROM students";
$row = mysqli_query($connection, $sql);
if(!$row) {
  die("Database query failed: ". mysqli_error($connection));
}

$stud_details = [];
while($result = mysqli_fetch_assoc($row)) {
  $stud_details[] = $result;
}

function fullname() {
  echo strtoupper($tud_details['lastname']), ." ". $stud_details['firstname'];
}

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
  <header>
    <h2>Welcome Student Profile system</h2>
  </header>
  <section>
    <h2>Student details</h2>
    <?php foreach($stud_details as $student): ?>
    <table>
      <tr>
        <th colspan="5">Student details</th>
      </tr>
      <tr>
        <td><?php echo student['firstname']; ?></td>
        <td><?php echo student['lastname']; ?></td>
        <td><?php echo student['gender'];?></td>
        <td><?php echo student['email']; ?></td>
        <td><?php echo student['phone']; ?></td>
      </tr>
    </table>
    <?php endforeach; ?>
  </section>
  <footer>
  <p>contact us</p>
    <address>
      For more details, contact
      <a href="mailto:customerservice@example.com">Customer Service</a>.
    </address>
    <p><small>&copy; copyright <?php echo date("Y"); ?> Slack Test.</small></p>
    <?php mysqli_close($connection); ?>
  </footer>
  
  
  
  
