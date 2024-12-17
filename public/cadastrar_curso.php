<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Curso</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../public/css/styles.css">
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/scroll.css">
    <link rel="stylesheet" href="../public/css/formularios.css">
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
            <h2>Cadastro de Curso</h2>
            <p class="form-description">Preencha os dados abaixo para cadastrar um novo curso.</p>

            <form action="cadastrar_curso_backend.php" method="POST" class="responsavel-form">

                <!-- Dados do Curso -->
                <fieldset class="form-group">
                    <legend>Informações do Curso</legend>

                    <div class="input-group">
                        <div class="input-item">
                            <label for="nome_curso">Nome do Curso</label>
                            <input type="text" id="nome_curso" name="nome_curso" placeholder="Digite o nome do curso" required>
                        </div>

                        <div class="input-item">
                            <label for="tipo_escola">Tipo de Escola</label>
                            <select id="tipo_escola" name="tipo_escola" required>
                                <option value="" disabled selected>Selecione o tipo</option>
                                <option value="tecnica">Técnica</option>
                                <option value="convencional">Convencional</option>
                            </select>
                        </div>

                        <div class="input-item">
                            <label for="nivel_ensino">Nível de Ensino</label>
                            <select id="nivel_ensino" name="nivel_ensino" required>
                                <option value="" disabled selected>Selecione o nível</option>
                                <option value="fundamental">Ensino Fundamental</option>
                                <option value="medio">Ensino Médio</option>
                                <option value="tecnico">Curso Técnico</option>
                            </select>
                        </div>

                        <div class="input-item">
                            <label for="carga_horaria">Carga Horária</label>
                            <input type="number" id="carga_horaria" name="carga_horaria" placeholder="Digite a carga horária do curso" required min="1" max="999">
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
                    <a href="curso.php" class="cancel-button">
                        <i class="fas fa-arrow-left"></i> Cancelar
                    </a>
                </div>
            </form>
        </section>
    </main>
</body>

</html>
