<?php 

include "../includes/config.php";
include "../includes/header.php";

$id = $_GET['id'];
$sqlExcluir = "DELETE FROM medico WHERE IDmedico = {$id}";

$resultado = mysqli_query($conn, $sqlExcluir);

if($resultado){
    echo "<div class='d-flex align-items-center justify-content-center mt-5'><h2>Excluído com sucesso!</h2></div><br>";
    echo "<div class='d-flex align-items-center justify-content-center'><a class='btn btn-primary' href='medicos-listar.php'>Voltar</a></div>";
}else{
    echo "Algo de errado, não está certo!";
}

?>