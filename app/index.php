<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>App Lista de Tarefas</title>

    <!-- CSS local -->
    <link rel="stylesheet" href="../css/estilo.css">

    <!-- Bootstrap 5 -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >

    <!-- Font Awesome 6 -->
    <link 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
        rel="stylesheet"
    >
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
                    <li class="list-group-item active">
                        Tarefas pendentes
                    </li>
                    <li class="list-group-item">
                        <a href="nova_tarefa.php" class="text-decoration-none">Nova tarefa</a>
                    </li>
                    <li class="list-group-item">
                        <a href="todas_tarefas.php" class="text-decoration-none">Todas tarefas</a>
                    </li>
                </ul>
            </aside>

            <!-- Página -->
            <main class="col-md-9">
                <div class="bg-white p-4 rounded shadow-sm">
                    <h4>Tarefas pendentes</h4>
                    <hr>

                    <!-- Tarefa -->
                    <div class="row mb-3 align-items-center tarefa">
                        <div class="col-md-9">
                            Lavar o carro
                        </div>
                        <div class="col-md-3 d-flex justify-content-end gap-3 mt-2 mt-md-0">
                            <i class="fa-solid fa-trash text-danger" role="button"></i>
                            <i class="fa-solid fa-pen-to-square text-info" role="button"></i>
                            <i class="fa-solid fa-check text-success" role="button"></i>
                        </div>
                    </div>

                    <!-- Tarefa -->
                    <div class="row mb-3 align-items-center tarefa">
                        <div class="col-md-9">
                            Passear com o cachorro
                        </div>
                        <div class="col-md-3 d-flex justify-content-end gap-3 mt-2 mt-md-0">
                            <i class="fa-solid fa-trash text-danger" role="button"></i>
                            <i class="fa-solid fa-pen-to-square text-info" role="button"></i>
                            <i class="fa-solid fa-check text-success" role="button"></i>
                        </div>
                    </div>

                </div>
            </main>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
