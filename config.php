<?php
$servername = "localhost";
$username = "mobw7774_wisnu";
$password = "wisnu@75";
$dbname = "mobw7774_api_wisnu";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
