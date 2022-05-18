<?php
require_once 'db_connection.php';

$orgName = $_REQUEST['orgName'];
$eventName = $_REQUEST['eventName'];
//$eventEmail = $_REQUEST['eventEmail'];
$text1 = $_REQUEST['text1'];
$text2 = $_REQUEST['text2'];
$text3 = $_REQUEST['text3'];
$Edate = $_REQUEST['goaldate'];

// $eventEmail = "SELECT email FROM orgs as o, events as e
//                WHERE o.orgName = e.orgName";

$sql = "INSERT INTO events (`orgName`, `eventName` , `eventDescr`, `Address`, `volunteerDescr`, `eDate` ) VALUES ";
$sql .= "('" . $orgName . "',";
$sql .= "'" . $eventName . "',";
//$sql .= "'" . $eventEmail . "',";
$sql .= "'" . $text1 . "',";
$sql .= "'" . $text2 . "',";
$sql .= "'" . $text3 . "',";
$sql .= "'" . $Edate . "')";


//print $sql;
if (mysqli_query($link, $sql)) {
  print("Stored");
}
else {
  print("Failed");
}

echo "<script>location.href='index.php'</script>";
?>
