<?php  
include "includes/header.php";

?>

            <div class="col-10">
                <div>
                    <nav class="navbar navbar-expand-lg">
                        <div class="container justify-content-end">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <div class="dropdown">
                                        <a href="#"
                                            class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle ms-5"
                                            id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="img/profile.png" alt="" width="32" height="32"
                                                class="rounded-circle me-2">
                                            <strong>Usuario</strong>
                                        </a>
                                        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                                            <li><a class="dropdown-item" href="#">Novo Cadastro</a></li>
                                            <li><a class="dropdown-item" href="#">Configurações</a></li>
                                            <li><a class="dropdown-item" href="#">Perfil</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Sair</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <!-- Nav inside of main-->

                <div class="d-flex justify-content-end m-3">
                    <button class="btn btn-outline-primary fs-5"><img class="" src="img/btnplus.png">Adiconar médico</button>
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
                            <tr>
                                <th scope="row">1</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>Thornton</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>Thornton</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                


<?php  
include "includes/footer.php";
?>