<?php 

include "../includes/header.php";
include "../includes/config.php";

$id = $_GET['id'];
$sqlBuscar = "SELECT * FROM paciente WHERE IDpaciente = {$id}";

$listaDePacientes = mysqli_query($conn, $sqlBuscar);

$nome = $telefone = $nascimento = $convenio = $obs = "";

while($paciente = mysqli_fetch_assoc($listaDePacientes)){
    $nome = $paciente['nome']; 
    $telefone = $paciente['telefone'];
    $nascimento = $paciente['nascimento'];
    $convenio = $paciente['convenio'];
    $obs = $paciente['obs'];
}

?>


<div class="container mt-5">
    <form name="pacientes-form-alterar" method="post" action="pacientes-alterar.php">

       <input type="hidden" name="IDpaciente" class="form-control" value="<?php echo $_GET['id']; ?>">
        <div class="row">
            <div class="col mt-2">
                <label for="nome">Nome:</label>
                <input class="form-control" value="<?php echo $nome; ?>" name="nome" type="text">
            </div>
            <div class="col">
                <label for="telefone">Telefone:</label>
                <input class="form-control" value="<?php echo $telefone; ?>" name="telefone" type="text">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="nascimento">Nascimento:</label>
                <input class="form-control" value="<?php echo $nascimento; ?>" name="nascimento" type="date">
            </div>
            <div class="col">
                <label for="convenio">Convenio:</label>
                <input class="form-control" value="<?php echo $convenio; ?>" name="convenio" type="text">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
            <label for="obs">Observação:</label>
               <textarea class="form-control" value="<?php echo $obs; ?>" name="obs" id="" cols="20" rows="10"></textarea>
            </div>
        </div>
        <div class="row m-5">
            <div class="col">
                <button class="btn btn-primary" type="submit">Alterar</button>
            </div>
        </div>
    </form>
</div>


<?php 
include "../includes/footer.php";
?>