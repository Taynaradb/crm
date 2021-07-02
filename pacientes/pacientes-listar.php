<?php  
include "../includes/header.php";
include "../includes/config.php";

$sqlBusca = "SELECT * FROM paciente;";
$listaPacientes = mysqli_query($conn, $sqlBusca);

?>

                <div class="d-flex justify-content-start m-5">
                    <a href="pacientes-form.php" class="btn btn-outline-primary fs-5"><img class="" src="../img/btnplus.png">Adiconar paciente</a>
                </div>
                <div class="container">
                    <h4 class="m-4">Pacientes</h4>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Telefone</th>
                                <th>Nascimento</th>
                                <th>Convenio</th>
                                <th class="text-center"><img class="justify-content-center" src="../img/tools.png"></img></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        while($paciente = mysqli_fetch_assoc($listaPacientes)){
                            echo "<tr>";
                            echo "<td>{$paciente['IDpaciente']}</td>";
                            echo "<td>{$paciente['nome']}</td>";
                            echo "<td>{$paciente['telefone']}</td>";
                            $dataBrasil = date('d/m/Y', strtotime($paciente['nascimento']));
                            echo "<td>{$dataBrasil}</td>";
                            echo "<td>{$paciente['convenio']}</td>";
                            echo "<td class='text-center'><a href='pacientes-form-alterar.php?id={$paciente['IDpaciente']}'><img src='../img/editar.png'></img></a>
                             <a href='pacientes-excluir.php?id={$paciente['IDpaciente']}'><img src='../img/delete.png'></img></a></td>";
                            echo "</tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                
                


<?php  
include "../includes/footer.php";
?>