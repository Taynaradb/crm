<?php

$nome = $_POST['nome'];
$nome = $_POST['telefone'];
$nome = $_POST['crm'];
$nome = $_POST['especialidade'];

include "../includes/config.php";
$sqlInsert = "INSERT INTO medico(nome, telefone, crm, especialidade) VALUES ('{$nome}', '{$telefone}', '{$crm}', '{$especialidade};)";

$insercao = mysqli_query($conn, $sqlInsert);


?>