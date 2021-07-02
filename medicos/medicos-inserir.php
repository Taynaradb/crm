<?php
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$crm = $_POST['crm'];
$especialidade = $_POST['especialidade'];

include "../includes/config.php";
include "../includes/header.php";
$sqlInsert = "INSERT INTO medico(nome, telefone, crm, especialidade) values ('{$nome}', '{$telefone}', '{$crm}', '{$especialidade}');";

$insercao = mysqli_query($conn, $sqlInsert);

if(empty($nome) || empty($telefone) || empty($crm) || empty($especialidade)){
    echo "<div class='d-flex align-items-center justify-content-center mt-5'><h2>Favor, preencher todos os campos!</h2></div><br>";
    echo "<div class='d-flex align-items-center justify-content-center'><a class='btn btn-primary' href='medicos-inserir.php'>Voltar</a></div>";
}else {
    if($insercao){
        echo "<div class='d-flex align-items-center justify-content-center mt-5'><h2>Medico inserido com sucesso!</h2></div><br>";
        echo "<div class='d-flex align-items-center justify-content-center'><a class='btn btn-primary' href='medicos-listar.php'>Voltar</a></div>";
    }else{
        echo "Algum erro aconteceu";
    }
}


?>