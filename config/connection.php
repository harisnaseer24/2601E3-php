<?php 
$server= "localhost";
$dbuser = "root";
$dbpassword ="YourNewPassword";
$dbname = "2601E3-ecommerce";

$conn= mysqli_connect($server,$dbuser, $dbpassword,$dbname);

if (!$conn) {
 
    die("Failed to connect");
    }



?>