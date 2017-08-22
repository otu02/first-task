<?php
//Database setup
defined('DB_SERVER') ? null : define("DB_SERVER", "localhost");
defined('DB_USER') ? null : define("DB_USER", "shield");
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
  return strtoupper($stud_details['lastname']).", ".$stud_details['firstname'];
}
?>
<style>
  * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
  }
  body {
      background-color: hsl(0, 0%, 64%);
      font-size: 16px;
      font-family: sans-serif;
  }
  header {
      padding: .5em;
      font-size: 1.105em;
      text-align: center;
  }
  .main_wrap {
      background-color: #fff;
      width: 80%;
      margin: 0 auto;
      padding: 2em 2em 0;
  }
  section h2 {
      display: none;
  }
  section {
      width: 90%;
      margin: 1em auto 4em;
  }
  section table,
  section th,
  section td {
      border-collapse: collapse;
      border: 1px solid hsl(0, 0%, 13%);
      padding: .5em;
  }
  section th {
      font-size: 1.35em;
  }
  section table td {
      width: 5em;
  }
  footer {
    height: 30px;
    display: flex;
    justify-content: space-between;
    padding: 0 4em 2.5em 3em;
  }
  footer a {
      text-decoration: none;
  }
  footer p {
      font-size: 1em;
  }
</style>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
  <div class="main_wrap">
    <header>
      <h2>HNG: Slack Stage 1 Task</h2>
    </header>
    <section>
      <h2>Student details</h2>
      <table>
        <tr>
          <th colspan="6">Student details</th>
        </tr>
      <?php foreach($stud_details as $student): ?>
        <tr>
          <td><?php echo htmlentities($student['id']); ?></td>
          <td><?php echo htmlentities($student['firstname']); ?></td>
          <td><?php echo htmlentities($student['last_name']); ?></td>
          <td><?php echo htmlentities($student['gender']);?></td>
          <td><?php echo htmlentities($student['email']); ?></td>
          <td><?php echo htmlentities($student['phone']); ?></td>
        </tr>
      <?php endforeach; ?>
      </table>
    </section>
    <footer>
      <address>
        For more details, contact
        <a href="mailto:customerservice@example.com">Customer Service</a>.
      </address>
      <p><small>&copy; copyright <?php echo date("Y"); ?> Slack Test.</small></p>
      <?php mysqli_close($connection); ?>
    </footer>
  </div>
  </body>
</html>

  
  
  
  
