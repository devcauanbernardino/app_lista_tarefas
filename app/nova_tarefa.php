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

    <?php if (isset($_GET['inclusao']) && $_GET['inclusao'] == '1') { ?>
        <div class="bg-success pt-2 text-white d-flex justify-content-center align-items-center">
            <h5>Tarefa inserida com sucesso</h5>
        </div>
    <?php } ?>

    <!-- Conteúdo -->
    <div class="container app mt-4">
        <div class="row">

            <!-- Menu -->
            <aside class="col-md-3 mb-3">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="index.php" class="text-decoration-none">Tarefas pendentes</a>
                    </li>
                    <li class="list-group-item active">
                        Nova tarefa
                    </li>
                    <li class="list-group-item">
                        <a href="todas_tarefas.php" class="text-decoration-none">Todas tarefas</a>
                    </li>
                </ul>
            </aside>

            <!-- Página -->
            <main class="col-md-9">
                <div class="bg-white p-4 rounded shadow-sm">
                    <h4>Nova tarefa</h4>
                    <hr>

                    <form method="post" action="../controller/tarefa_controller.php?acao=inserir">
                        <div class="mb-3">
                            <label class="form-label">Descrição da tarefa</label>
                            <input type="text" name="tarefa" class="form-control" placeholder="Exemplo: Lavar o carro"
                                required>
                        </div>

                        <button type="submit" class="btn btn-success">
                            <i class="fa-solid fa-plus"></i> Cadastrar
                        </button>
                    </form>
                </div>
            </main>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>