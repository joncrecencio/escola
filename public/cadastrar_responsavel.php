<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Responsável</title>
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
            <!-- Foto do usuário com gradiente -->
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
            <h2>Cadastro de Responsável</h2>
            <p class="form-description">Preencha os dados abaixo para cadastrar um novo responsável.</p>

            <form action="cadastrar_responsavel_backend.php" method="POST" class="responsavel-form">

                <!-- Dados Pessoais -->
                <fieldset class="form-group">
                    <legend>Dados Pessoais</legend>

                    <div class="input-group">
                        <div class="input-item">
                            <label for="nome">Nome Completo</label>
                            <input type="text" id="nome" name="nome" placeholder="Digite o nome completo" required>
                        </div>

                        <div class="input-item">
                            <label for="cpf">CPF</label>
                            <input type="text" id="cpf" name="cpf" placeholder="Digite o CPF" maxlength="14" required>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="input-item">
                            <label for="rg">RG</label>
                            <input type="text" id="rg" name="rg" placeholder="Digite o RG" maxlength="12" required>
                        </div>

                        <div class="input-item">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" placeholder="Digite o e-mail" required>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="input-item">
                            <label for="telefone">Telefone</label>
                            <input type="text" id="telefone" name="telefone" placeholder="Digite o telefone" required>
                        </div>

                        <div class="input-item">
                            <label for="whatsapp">WhatsApp</label>
                            <input type="text" id="whatsapp" name="whatsapp" placeholder="Digite o WhatsApp" required>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="input-item">
                            <label for="parentesco">Parentesco</label>
                            <select id="parentesco" name="parentesco" required>
                                <option value="" disabled selected>Selecione o parentesco</option>
                                <option value="Pai">Pai</option>
                                <option value="Mãe">Mãe</option>
                                <option value="Avô">Avô</option>
                                <option value="Avó">Avó</option>
                                <option value="Tio">Tio</option>
                                <option value="Tia">Tia</option>
                                <option value="Outro">Outro</option>
                            </select>
                        </div>
                    </div>
                </fieldset>

                <!-- Endereço -->
                <fieldset class="form-group">
                    <legend>Endereço</legend>

                    <div class="input-group">
                        <div class="input-item">
                            <label for="cep">CEP</label>
                            <input type="text" id="cep" name="cep" placeholder="Digite o CEP" required>
                        </div>

                        <div class="input-item">
                            <label for="rua">Rua</label>
                            <input type="text" id="rua" name="rua" placeholder="Digite o nome da rua" required>
                        </div>

                    </div>

                    <div class="input-group">
                        <div class="input-item">
                            <label for="numero">Número</label>
                            <input type="text" id="numero" name="numero" placeholder="Digite o número" required>
                        </div>
                        <div class="input-item">
                            <label for="bairro">Bairro</label>
                            <input type="text" id="bairro" name="bairro" placeholder="Digite o bairro" required>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="input-item">
                            <label for="cidade">Cidade</label>
                            <input type="text" id="cidade" name="cidade" placeholder="Digite a cidade" required>
                        </div>

                        <div class="input-item">
                            <label for="estado">Estado</label>
                            <input type="text" id="estado" name="estado" placeholder="Digite o estado" required>
                        </div>
                    </div>
                </fieldset>

                <!-- Botões -->
                <div class="form-actions">
                    <button type="submit" class="submit-button">
                        <i class="fas fa-save"></i> Cadastrar
                    </button>
                    <a href="responsavel.php" class="cancel-button">
                        <i class="fas fa-arrow-left"></i> Cancelar
                    </a>
                </div>
            </form>
        </section>
    </main>

</body>

</html>
