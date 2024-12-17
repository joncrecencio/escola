<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Professor</title>
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
            <h2>Editar Professor</h2>
            <p class="form-description">Preencha os dados abaixo para editar os dados de um professor.</p>

            <form action="cadastrar_professor_backend.php" method="POST" class="responsavel-form">

                <!-- Dados Pessoais -->
                <fieldset class="form-group">
                    <legend>Dados Pessoais</legend>

                    <div class="input-group">
                        <div class="input-item">
                            <label for="nome_professor">Nome Completo</label>
                            <input type="text" id="nome_professor" name="nome_professor" placeholder="Digite o nome completo" required>
                        </div>

                        <div class="input-item">
                            <label for="data_nascimento">Data de Nascimento</label>
                            <input type="date" id="data_nascimento" name="data_nascimento" required>
                        </div>

                        <div class="input-item">
                            <label for="cpf_professor">CPF</label>
                            <input type="text" id="cpf_professor" name="cpf_professor" placeholder="Digite o CPF" required>
                        </div>

                        <div class="input-item">
                            <label for="sexo">Sexo</label>
                            <select id="sexo" name="sexo" required>
                                <option value="" disabled selected>Selecione</option>
                                <option value="masculino">Masculino</option>
                                <option value="feminino">Feminino</option>
                                <option value="outro">Outro</option>
                            </select>
                        </div>

                        <div class="input-item">
                            <label for="email_professor">Email</label>
                            <input type="email" id="email_professor" name="email_professor" placeholder="Digite o email" required>
                        </div>
                    </div>
                </fieldset>

                <!-- Vincular Matérias -->
                <fieldset class="form-group">
                    <div class="input-group materia_ajuste">
                        <label>Matérias</label>
                        <div class="checkbox-group">
                            <input type="checkbox" id="matematica" name="materias[]" value="matematica">
                            <label for="matematica">Matemática</label>

                            <input type="checkbox" id="portugues" name="materias[]" value="portugues">
                            <label for="portugues">Português</label>

                            <input type="checkbox" id="historia" name="materias[]" value="historia">
                            <label for="historia">História</label>

                            <input type="checkbox" id="ciencias" name="materias[]" value="ciencias">
                            <label for="ciencias">Ciências</label>

                            <input type="checkbox" id="geografia" name="materias[]" value="geografia">
                            <label for="geografia">Geografia</label>
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
                    <a href="professor.php" class="cancel-button">
                        <i class="fas fa-arrow-left"></i> Cancelar
                    </a>
                </div>
            </form>
        </section>
    </main>
</body>

</html>
