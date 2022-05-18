<?php
$user = 'root1';
$password = '';
$db = 'DBProject';
$host = 'localhost';

$link = mysqli_init();
$success = mysqli_real_connect(
    $link,
    $host,
    $user,
    $password,
    $db,
);
?>