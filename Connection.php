<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hotel";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn) {
    die ("Your Database is not Connected Please Try Again" . mysqli_connect_error());
} else {
    // echo "Your Database is Connected.";
}
?>