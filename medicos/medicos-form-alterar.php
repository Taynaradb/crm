<?php 

include "../includes/header.php";
include "../includes/config.php";

$id = $_GET['id'];
$sqlBuscar = "SELECT * FROM medico WHERE IDmedico = {$id}";

$listaDeMedicos = mysqli_query($conn, $sqlBuscar);
$nome = $telefone = $crm = $especialidade = "";

while($medico = mysqli_fetch_assoc($listaDeMedicos)){
    $nome = $medico['nome'];
    $telefone = $medico['telefone'];
    $crm = $medico['crm'];
    $especialidade = $medico['especialidade'];
}

?>



<div class="container mt-5">
    <form name="medicos-form-alterar" method="post" action="medicos-alterar.php">


        <div class="row">
            <div class="col-2">
                <input class="form-control" type="hidden" name="IDmedico" value="<?php echo $_GET['id']?>">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="nome">Nome:</label>
                <input class="form-control" value="<?php echo $nome; ?>" name="nome" type="text">
            </div>
            <div class="col">
                <label for="telefone">Telefone:</label>
                <input class="form-control" value="<?php echo $telefone; ?>" name="telefone" type="text">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="crm">CRM:</label>
                <input class="form-control" value="<?php echo $crm; ?>" name="crm" type="text">
            </div>
            <div class="col">
                <label for="especialidade">Especialidade:</label>
                <select class="form-control" name="especialidade">
                    <option disabled>Selecione um:</option>
                    <option value="Cardiologista" <?php if($especialidade == 'Cardiologista'){
                        echo "selected "; } ?> >Cardiologista</option>
                    <option value="Nutricionista" <?php if($especialidade == 'Nutricionista'){
                        echo "selected "; } ?> >Nutricionista</option>
                    <option value="Gineocologista" <?php if($especialidade == 'Gineocologista'){
                        echo "selected "; } ?> >Gineocologista</option>
                    <option value="Ortopedista" <?php if($especialidade == 'Ortopedista'){
                        echo "selected "; } ?> >Ortopedista</option>
                </select>
            </div>
        </div>
        <div class="row m-5">
            <div class="col">
                <a href="medicos-listar.php" class="btn btn-warning" type="submit">Voltar</a>
        
                <button class="btn btn-primary" type="submit">Alterar</button>
            </div>
        </div>
    </form>
</div>


<?php 
include "../includes/footer.php";
?>