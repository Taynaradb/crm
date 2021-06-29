<?php 

include "../includes/header.php";
include "../includes/config.php";

?>



<div class="container mt-5">
    <form action="medicos-form" method="post" action="medicos-inserir.php">
        <div class="row">
            <div class="col">
                <label for="nome">Nome:</label>
                <input class="form-control" name="nome" type="text">
            </div>
            <div class="col">
                <label for="telefone">Telefone:</label>
                <input class="form-control" name="telefone" type="text">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="crm">CRM:</label>
                <input class="form-control" name="crm" type="text">
            </div>
            <div class="col">
                <label for="especialidade">Especialidade:</label>
                <select class="form-control" name="especialidade">
                    <option  disabled>Selecione um:</option>
                    <option value="Cardiologista">Cardiologista</option>
                    <option value="Nutricionista">Nutricionista</option>
                    <option value="Gineocologista">Gineocologista</option>
                    <option value="Ortopedista">Ortopedista</option>
                </select>
            </div>
        </div>
        <div class="row m-5">
            <div class="col">
                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </div>
        </div>
    </form>
</div>


<?php 
include "../includes/footer.php";
?>