<?php
$hostname = "localhost";
$user = "root";
$pw = "";
$database = "toko_nabila";

$connection = mysqli_connect ($hostname, $user, $pw, $database);
if($connection){
    echo "";
} else {
    die("connection failed").mysqli_connect_error();
}
?>