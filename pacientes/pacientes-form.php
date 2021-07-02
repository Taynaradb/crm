<?php 

include "../includes/header.php";
include "../includes/config.php";

?>



<div class="container mt-5">
    <form name="pacientes-form" method="post" action="pacientes-inserir.php">
        <div class="row">
            <div class="col mt-2">
                <label for="nome">Nome:</label>
                <input class="form-control" name="nome" type="text">
            </div>
            <div class="col">
                <label for="telefone">Telefone:</label>
                <input class="form-control" name="telefone" type="text">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="nascimento">Nascimento:</label>
                <input class="form-control" name="nascimento" type="date">
            </div>
            <div class="col">
                <label for="convenio">Convenio:</label>
                <input class="form-control" name="convenio" type="text">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
            <label for="obs">Observação:</label>
               <textarea class="form-control" name="obs" id="" cols="20" rows="10"></textarea>
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