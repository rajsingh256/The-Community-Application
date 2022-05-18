 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="http://cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="sylesheet" href="http://cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <link rel="stylesheet" href="goals.css" />
    <title>Goal Tracker</title>
  </head>
  <body>
      <?php
require_once 'db_connection.php';
$sql = "SELECT * FROM events";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));

//Complete Goals
print("<h2>All Events</h2>");
$result = mysqli_query($link, $sql) or die(mysqli_error($link));
while ($row = mysqli_fetch_array($result)) {
  echo "<div class='goal'>";
  echo "<strong><p>" . $row['orgName'];
  echo "</strong><p>" . $row['eventName'];
  echo "</strong><p>" . $row['eventDescr'];
  echo "</strong><p>" . $row['Address'];
  echo "</strong><p>" . $row['volunteerDescr'];
  echo "</strong><p>" . $row['eDate'];
  echo "</div>";
}
?>
</body>