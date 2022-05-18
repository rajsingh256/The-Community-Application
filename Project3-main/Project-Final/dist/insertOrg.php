<?php
require_once 'db_connection.php';

$orgName = $_REQUEST['orgName'];
$bio = $_REQUEST['bio'];
$email = $_REQUEST['email'];
$address = $_REQUEST['address'];
$phoneNumber = $_REQUEST['phoneNumber'];

$sql = "INSERT INTO orgs (`orgName`, `bio`, `email`, `address`, `phoneNumber` ) VALUES ";
$sql .= "('" . $orgName . "',";
$sql .= "'" . $bio . "',";
$sql .= "'" . $email . "',";
$sql .= "'" . $address . "',";
$sql .= "'" . $phoneNumber . "')";

//print $sql;
if (mysqli_query($link, $sql)) {
    print("Stored");
}
else {
    print("Failed");
}

echo "<script>location.href='index.php'</script>";
?>
