<?php  
include "../includes/header.php";
include "../includes/config.php";

$sqlBusca = "SELECT * FROM medico;";
$listaMedicos = mysqli_query($conn, $sqlBusca);

?>

                <div class="d-flex justify-content-start m-5">
                    <a href="medicos-form.php" class="btn btn-outline-primary fs-5"><img class="" src="../img/btnplus.png">Adiconar médico</a>
                </div>
                <div class="container">
                    <h4 class="m-4">Médicos</h4>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">CRM</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Especialidade</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        while($medico = mysqli_fetch_assoc($listaMedicos)){
                            echo "<tr>";
                            echo "<td>{$medico['IDmedico']}</td>";
                            echo "<td>{$medico['nome']}</td>";
                            echo "<td>{$medico['telefone']}</td>";
                            echo "<td>{$medico['crm']}</td>";
                            echo "<td>{$medico['especialidade']}</td>";
                            echo "</tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                
                


<?php  
include "../includes/footer.php";
?>