<?php
// Incluir o arquivo PacienteListarController.php para acessar a classe listaDeUnidade
//require_once("../../../controllers/Paciente/PacienteListarController.php");
require_once(dirname(__FILE__) ."/App/controllers/Paciente/PacienteListarController.php");

// Criar uma instância da classe listaDeUnidade para acessar os métodos
$controller = new listarPaciente();

// Chamar o método listarTodos para obter os dados das unidades
$rows = $controller->listarTodos();
if ($rows)
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <link href="css/styles.css " rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Coluna Lateral</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                   </div>
            </form>             
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                          
                            <!--PACIENTES-->

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts1">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Cadastros
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="./App/views/user/PacienteView/indexPaciente.php">Pacientes</a>
                                    <!---user/PacienteView/indexPaciente.php-->
                                </nav>
                            </div>
                            
                            <!-- UNIDADES -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts2">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                INSTITUIÇÃO
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">UNIDADES</a>
                                </nav>
                            </div>
                                     <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Vazio
                            </a>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Vazio
                            </a>
                        </div>
                    </div>
                                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Pacientes</h1>
                                                <ol class="breadcrumb mb-4">
                                <div class="container">
                                    <header class="d-flex justify-content-between my-4">
                                        <p class="text-right"><a href="criarPaciente.php" class="btn btn-success">+ Novo Cadastro</a></p>
                                        <a href="../../home.php" class="btn btn-primary" style="margin-bottom: 25px;">Fechar</a>
                                    </header>
                                  <!-- Loop para cada paciente -->
    <?php foreach ($rows as $row): ?>
        <div class="card">
            <div class="card-header">Paciente</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <!--Verifica se $row['created'] está definido e não é nulo-->
                        <strong>Data do cadrastro:</strong> <?php if (isset($row ['created']) && $row['created'] !== null) {
                            // Converte a data para o formato brasileiro
                            $dataFormatadaCadastro = date('d/m/y H:i', strtotime($row['created']));
                            // Exibe a data formatada
                            echo $dataFormatadaCadastro;
                        } else {
                            echo "Data não disponível";
                        } ?> </p>
                        <!--Verifica se $row['modified'] está definido e não é nulo-->
                        <p><strong>Data de
                                alteração:</strong> <?php if (isset($row['modified']) && $row['modified'] !== null) {

                                // Converte a data para o formato brasileiro
                                $dataFormatada = date('d/m/y H:i', strtotime($row['modified']));

                                // Exibe a data formatada
                                echo $dataFormatada;
                            } else {
                                echo "Data não disponível";
                            } ?></p>
                        <p><strong>Nome:</strong> <?php echo $row['nome_paciente']; ?></p>
                        <p><strong>Situação:</strong> <?php echo $row['nome_situacao']; ?></p>
                        <p><strong>Celular:</strong> <?php echo $row['celular']; ?></p>
                    </div>
                    <div class="col-md-4">
                        <p><strong>CNS:</strong> <?php echo $row['cns']; ?></p>
                        <p><strong>CPF:</strong> <?php echo $row['cpf']; ?></p>
                        <p><strong>RG:</strong> <?php echo $row['rg']; ?></p>
                        <p><strong>USF:</strong> <?php echo $row['nome_usf']; ?></p>
                    </div>
                    <div class="col-md-4">
                        <p><strong>Embarque:</strong> <?php echo $row['embarque']; ?></p>
                        <p><strong>Referência:</strong> <?php echo $row['referencia']; ?></p>
                    </div>
                    <div class="col-md-3">
                        <div style="text-align: center; margin-bottom: 15px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="col-md-9 text-right ">
            <div class="btn-group">
                <a href="visualizarPaciente.php?id=<?php echo $row['id']; ?>" class="btn btn-info">Visualizar</a>
                <a href="editarPaciente.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"
                   style="margin-left: 5px; margin-right: 5px;">Editar</a>
                <a class="btn btn-danger"
                   href="../../../controllers/Paciente/PacienteDeletarController.php?id=<?php echo $row['id']; ?>">Excluir</a>
            </div>
        </div>
        <br>
    <?php endforeach; ?>
</div>

<br>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
</body>
    
</html>
