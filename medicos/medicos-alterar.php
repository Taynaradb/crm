<?php 
include "../includes/config.php";
include "../includes/header.php";

$id = $_POST['IDmedico'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$crm = $_POST['crm'];
$especialidade = $_POST['especialidade']; 

$sqlAlterar = "UPDATE medico set 
               nome = '{$nome}', 
               telefone = '{$telefone}',
               crm = '{$crm}', 
               especialidade = '{$especialidade}'
               WHERE IDmedico = {$id}";

$resultado = mysqli_query($conn, $sqlAlterar);

if($resultado){
    echo "<div class='d-flex align-items-center justify-content-center mt-5'><h2>Médico alterado com sucesso!</h2></div><br>";
    echo "<div class='d-flex align-items-center justify-content-center'><a class='btn btn-primary' href='medicos-listar.php'>Voltar</a></div>";
}else{
    echo "erro";
}