<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Aluno</title>
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
            <h2>Cadastro de Aluno</h2>
            <p class="form-description">Preencha os dados abaixo para cadastrar um novo aluno.</p>

            <form action="cadastrar_aluno_backend.php" method="POST" class="responsavel-form">

                <!-- Dados Pessoais -->
                <fieldset class="form-group">
                    <legend>Dados Pessoais</legend>

                    <div class="input-group">
                        <div class="input-item">
                            <label for="matricula">Matrícula</label>
                            <input type="text" id="matricula" name="matricula" placeholder="Número gerado automaticamente" readonly>
                        </div>

                        <div class="input-item">
                            <label for="nome_aluno">Nome Completo</label>
                            <input type="text" id="nome_aluno" name="nome_aluno" placeholder="Digite o nome completo" required>
                        </div>

                        <div class="input-item">
                            <label for="data_nascimento">Data de Nascimento</label>
                            <input type="date" id="data_nascimento" name="data_nascimento" required>
                        </div>

                        <div class="input-item">
                            <label for="cpf_aluno">CPF do Aluno</label>
                            <input type="text" id="cpf_aluno" name="cpf_aluno" placeholder="Digite o CPF do Aluno" required>
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
                            <label for="cpf_responsavel">CPF do Responsável</label>
                            <input type="text" id="cpf_responsavel" name="cpf_responsavel" placeholder="Digite o CPF do Responsável" required>
                        </div>
                    </div>
                </fieldset>

                <!-- Informações Acadêmicas -->
                <fieldset class="form-group">
                    <legend>Informações Acadêmicas</legend>

                    <div class="input-group">
                        <div class="input-item">
                            <label for="serie">Série</label>
                            <select id="serie" name="serie" required>
                                <option value="" disabled selected>Selecione a série</option>
                                <option value="1">1º Ano</option>
                                <option value="2">2º Ano</option>
                                <option value="3">3º Ano</option>
                            </select>
                        </div>

                        <div class="input-item">
                            <label for="turma">Turma</label>
                            <input type="text" id="turma" name="turma" placeholder="Digite a turma" required>
                        </div>

                        <div class="input-item">
                            <label for="ano_letivo">Ano Letivo</label>
                            <input type="number" id="ano_letivo" name="ano_letivo" placeholder="Ex: 2024" required>
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
                    <a href="aluno.php" class="cancel-button">
                        <i class="fas fa-arrow-left"></i> Cancelar
                    </a>
                </div>
            </form>
        </section>
    </main>
</body>

</html>
