<?php
require_once 'db_connection.php';

$firstName = $_REQUEST['firstName'];
$lastName = $_REQUEST['lastName'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];


$sql = "INSERT INTO users (`firstName`, `lastName`, `email`, `password` ) VALUES ";
$sql .= "('" . $firstName . "',";
$sql .= "'" . $lastName . "',";
$sql .= "'" . $email . "',";
$sql .= "'" . $password . "')";

//print $sql;
if (mysqli_query($link, $sql)) {
    print("Stored");
}
else {
    print("Failed");
}

echo "<script>location.href='index.php'</script>";
?>
