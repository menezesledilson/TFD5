<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="paciente/image/favicon.ico"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Atualizar Diárias</title>
</head>
<body>
<?php
// Incluir o arquivo do controlador
require_once("../../../controllers/Diaria/DiariaEditarController.php");
?>
<div class="container">
    <header class="d-flex justify-content-between- my-4">
        <div class="ms-auto">
            <a href="indexDiaria.php" class="btn btn-primary">Voltar</a>
        </div>
    </header>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header">Atualizar informação da diaria</div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label>Motorista:</label>
                        <input type="text" class="form-control form-control-sm" name=" "
                               value=" ">
                    </div>
                    <div class="col-md-3">
                        <label>Local:</label>
                        <input type="text" class="form-control form-control-sm" name="nome"
                               value="<?php echo !empty($editarDiaria->getNome()) ? $editarDiaria->getNome() : ''; ?>">
                    </div>
                    <div class="col-md-3">
                        <label>Data:</label>
                        <input type="text" class="form-control form-control-sm" name=" "
                               value=" ">
                    </div>

                </div>
            </div>
        </div>
            <div class="mt-3">
                <!-- Adicione o campo de ID -->
                <input type="hidden" name="id" value="<?php echo !empty($editarDiaria->getId()) ? $editarDiaria->getId() : ''; ?>">
                <!-- Adicione o botão de editar -->
                <button type="submit" class="btn btn-primary" id="editarDiaria" name="submit" value="editarDiaria">Editar</button>
            </div>

        </div>
    </form>
</div>
</body>
</html>
