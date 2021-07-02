<?php
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$nascimento = $_POST['nascimento'];
$convenio = $_POST['convenio'];
$obs = $_POST['obs'];


include "../includes/config.php";
include "../includes/header.php";

$sqlInsert = "INSERT INTO paciente(nome, telefone, nascimento, convenio, obs) values ('{$nome}', '{$telefone}', '{$nascimento}', '{$convenio}', '{$obs}');";

$insercao = mysqli_query($conn, $sqlInsert);


if(empty($nome)||empty($telefone)||empty($nascimento)||empty($convenio)){
    echo "<div class='d-flex align-items-center justify-content-center mt-5'><h2>Favor, preencher todos os campos!</h2></div><br>";
    echo "<div class='d-flex align-items-center justify-content-center'><a class='btn btn-primary' href='pacientes-form.php'>Voltar</a></div>";
}else{
if($insercao){
    echo "<div class='d-flex align-items-center justify-content-center mt-5'><h2>Paciente inserido com sucesso!</h2></div><br>";
    echo "<div class='d-flex align-items-center justify-content-center'><a class='btn btn-primary' href='pacientes-listar.php'>Voltar</a></div>";

}else{
    echo "Algo de errado, não está certo";
}
}
?>

