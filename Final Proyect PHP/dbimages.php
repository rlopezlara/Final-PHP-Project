
<!--I create a second connection to the server to just upload images-->
<?php

$server = "172.31.22.43";
$username = "Rodrigo200549271";
$password = "MVe9E-OiyJ";
$dbname = "Rodrigo200549271";

try{
    $conn = new PDO("mysql:host=$server; dbname=$dbname", "$username","$password");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    die("Unable to connect to the database".$e->getMessage());
}
?>