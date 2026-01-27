<?php

$acao = 'recuperar';
require "../controller/tarefa_controller.php";

// echo '<pre>';
// print_r($tarefas);
// echo '</pre>';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>App Lista de Tarefas</title>

    <!-- CSS local -->
    <link rel="stylesheet" href="../css/estilo.css">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome 6 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                <img src="../img/logo.png" width="30" height="30" alt="Logo">
                <strong>App Lista de Tarefas</strong>
            </a>
        </div>
    </nav>

    <!-- Conteúdo -->
    <div class="container app mt-4">
        <div class="row">

            <!-- Menu -->
            <aside class="col-md-3 mb-3">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="index.php" class="text-decoration-none">Tarefas pendentes</a>
                    </li>
                    <li class="list-group-item">
                        <a href="nova_tarefa.php" class="text-decoration-none">Nova tarefa</a>
                    </li>
                    <li class="list-group-item active">
                        Todas tarefas
                    </li>
                </ul>
            </aside>

            <!-- Página -->
            <main class="col-md-9">
                <div class="bg-white p-4 rounded shadow-sm">
                    <h4>Todas as tarefas</h4>
                    <hr>
                    <?php foreach ($tarefas as $indice => $tarefa) { ?>

                        <!-- Tarefa -->
                        <div class="row mb-3 align-items-center tarefa">
                            <div class="col-md-9" id="tarefa_<?= $tarefa->id ?>">
                                <?= $tarefa->tarefa ?><span class="text-muted">(<?= $tarefa->status ?>)</span>
                            </div>
                            <div class="col-md-3 d-flex justify-content-end gap-3 mt-2 mt-md-0">
                                <i class="fa-solid fa-trash text-danger" role="button"></i>
                                <i class="fa-solid fa-pen-to-square text-info" role="button" onclick="editar(<?= $tarefa->id ?>,  '<?= $tarefa->tarefa ?>')"></i>
                                <i class="fa-solid fa-check text-success" role="button"></i>
                            </div>
                        </div>

                    <?php } ?>

                </div>
            </main>

        </div>
    </div>
    <script>
        function editar(id, txt_tarefa) {
            //criar um form de edicao
            let form = document.createElement('form');
            form.action = '../controller/tarefa_controller.php?acao=atualizar'
            form.method = 'post'
            form.classList = 'row'


            //criar um input para entrada do texto
            let inputTarefa = document.createElement('input');
            inputTarefa.type = 'text';
            inputTarefa.name = 'tarefa';
            inputTarefa.classList = 'col-6 form-control'
            inputTarefa.value = txt_tarefa


            //criar um input hidden para guardar o id da tarefa
            let inputId = document.createElement('input');
            inputId.type = 'hidden';
            inputId.name = 'id';
            inputId.value = id

            //criar um button para envio do form
            let button = document.createElement('button');
            button.type = 'submit'
            button.classList = 'col-2 btn btn-info text-center'
            button.innerHTML = 'Atualizar'

            //incluir inputTarefa no form
            form.appendChild(inputTarefa);

            //incluir o inputId no form
            form.appendChild(inputId);

            //incluir button no form
            form.appendChild(button);

            // console.log(form)

            //selecionar a div tarefa
            let tarefa = document.getElementById('tarefa_' + id);

            //limpar o texto da tarefa para inclusao do form
            tarefa.innerHTML = '';

            //incluir o form na div tarefa
            tarefa.insertBefore(form, tarefa[0]);

            
        }





    </script>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body >
</html >