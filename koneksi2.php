<?php
function getConnection():PDO{
$servername = "localhost";
$username = "astrid";
$password = "";
$database = "mahasiswa";
return new PDO("mysql:host = $servername;dbname=$database",$username,$password.[PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION]);
}
?>