<?php 

$host = "localhost";
$user = "root";
$pass = "";
$bancodedados = "crm";

$conn = mysqli_connect($host, $user, $pass, $bancodedados);

if(!$conn){
    die("Não conectou. Erro: " . mysqli_connect_error());
}

?>
