<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Matéria</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../public/css/styles.css">
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/scroll.css">
    <link rel="stylesheet" href="../public/css/formularios.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

    <!-- Header -->
    <header class="header">
        <div class="logo-container">
            <img src="../public/images/htc.png" alt="Logo da Empresa" class="logo">
        </div>

        <div class="header-right">
            <div class="profile-container">
                <img src="../public/images/jon.jfif" alt="Foto do usuário" class="profile-picture">
            </div>
            <a href="dashboard.php" class="home-button">
                <i class="fas fa-home"></i> Home
            </a>
            <button class="logout-button">
                <i class="fas fa-sign-out-alt"></i> Sair
            </button>
        </div>
    </header>

    <!-- Conteúdo Principal -->
    <main class="responsavel-form-container">
        <section class="form-section">
            <h2>Cadastro de Matéria</h2>
            <p class="form-description">Preencha os dados abaixo para cadastrar uma nova matéria.</p>

            <form action="cadastrar_materia_backend.php" method="POST" class="responsavel-form">

                <!-- Dados da Matéria -->
                <fieldset class="form-group">
                    <legend>Informações da Matéria</legend>

                    <div class="input-group">
                        <div class="input-item">
                            <label for="nome_materia">Nome da Matéria</label>
                            <input type="text" id="nome_materia" name="nome_materia" placeholder="Digite o nome da matéria" required>
                        </div>

                        <div class="input-item">
                            <label for="curso">Curso</label>
                            <input type="text" id="curso" name="curso" placeholder="Buscar curso" required>
                            <div id="curso-lista"></div>
                        </div>

                        <div class="input-item">
                            <label for="professor">Professor</label>
                            <input type="text" id="professor" name="professor" placeholder="Buscar professor" required>
                            <div id="professor-lista"></div>
                        </div>
                    </div>
                </fieldset>

                <!-- Observações -->
                <fieldset class="form-group">
                    <legend>Observações</legend>
                    <div class="input-group">
                        <div class="input-item">
                            <label for="observacoes">Observações</label>
                            <textarea id="observacoes" name="observacoes" rows="3" placeholder="Digite observações, se necessário..."></textarea>
                        </div>
                    </div>
                </fieldset>

                <!-- Ações -->
                <div class="form-actions">
                    <button type="submit" class="submit-button">
                        <i class="fas fa-save"></i> Salvar
                    </button>
                    <a href="materia.php" class="cancel-button">
                        <i class="fas fa-arrow-left"></i> Cancelar
                    </a>
                </div>
            </form>
        </section>
    </main>
</body>

</html>
