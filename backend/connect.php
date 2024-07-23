<?php

$host= 'localhost';
$username= 'root';
$password= '';
$database= 'Portfolio';

$conn= mysqli_connect($host,$username,$password,$database);

if (!$conn) {
    die('Connection Failed Due to '.mysqli_connect_error());
}


?>