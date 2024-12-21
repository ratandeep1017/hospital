<?php

$hname = "localhost";
$uname = "root";
$pass = "";
$db = "hospital";
$conn = mysqli_connect($hname, $uname, $pass, $db);
if (!$conn) {
    echo "CONNECTION ERROR";
    die();
}
?>




<!-- if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit'])) {
$server = "localhost";
$username = "id21728543_admin";
$password = "Qwerty123!";
$database = "id21728543_contactme"; -->