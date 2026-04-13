<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "phprevise";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
if($conn->connect_error){
    die("error".$conn->connect_error);
}
?>