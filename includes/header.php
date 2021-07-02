<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultorio</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="">

    <div class="container-fluid">
        <div>
            <div class="row whole">
                <div class="col-2 ds text-center">
                    <h5 class="mt-5 text-white">
                    <a class="text-decoration-none text-white" href="../index.php"><img src="../img/drlogo.png"></img> Dr. Médicos</a>
                    </h5>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="../medicos/medicos-listar.php" class="white nav-link">
                            Cadastro de médicos
                            </a>
                        </li>
                        <li>
                            <a href="../pacientes/pacientes-listar.php" class="white nav-link">
                                Cadastro de pacientes
                            </a>
                        </li>
                        <li>
                            <a href="../agenda/agenda-listar.php" class="white nav-link">
                                Agendamento
                            </a>
                        </li>
                    </ul>
                </div>
              

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
                                                <img src="../img/profile.png" alt="" width="32" height="32"
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