<?php 

include "../includes/config.php";
include "../includes/header.php";

$id = $_POST['IDpaciente'];
$nome = $_POST['nome']; 
$telefone = $_POST['telefone'];
$nascimento = $_POST['nascimento'];
$convenio = $_POST['convenio'];
$obs = $_POST['obs'];

$sqlUpdate = "UPDATE paciente set 
           nome = '{$nome}',
           telefone = '{$telefone}',
           nascimento = '{$nascimento}',
           convenio = '{$convenio}',
           obs = '{$obs}'
           WHERE IDpaciente = {$id}";

$update = mysqli_query($conn, $sqlUpdate);

if($update){
    echo "<div class='d-flex align-items-center justify-content-center mt-5'><h2>Paciente alterado com sucesso!</h2></div><br>";
    echo "<div class='d-flex align-items-center justify-content-center'><a class='btn btn-primary' href='pacientes-listar.php'>Voltar</a></div>";
}else{
    echo "erro";
}

?>