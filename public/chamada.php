<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamada de Alunos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../public/css/styles.css">
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/scroll.css">
    <link rel="stylesheet" href="../public/css/formularios.css">
    <link rel="stylesheet" href="../public/css/chamada.css"> <!-- Novo CSS -->
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
    <main class="chamada-container">
        <section class="chamada-section">
            <h2>Chamada de Alunos</h2>
            <p class="form-description">Selecione o ano letivo e a turma para realizar a chamada.</p>

            <!-- Filtro: Ano Letivo e Turma -->
            <!-- Filtro: Ano Letivo, Ano Escolar e Turma -->
            <form method="POST" action="registrar_chamada.php" class="filtro-form">
                <div class="filtro-group">
                    <!-- Ano Letivo -->
                    <div class="input-item">
                        <label for="ano_letivo">Ano Letivo</label>
                        <select id="ano_letivo" name="ano_letivo" required>
                            <option value="" disabled selected>Selecione o ano</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                        </select>
                    </div>

                    <!-- Ano Escolar -->
                    <div class="input-item">
                        <label for="ano_escolar">Ano Escolar</label>
                        <select id="ano_escolar" name="ano_escolar" required>
                            <option value="" disabled selected>Selecione o ano escolar</option>
                            <option value="1º Ano">1º Ano</option>
                            <option value="2º Ano">2º Ano</option>
                            <option value="3º Ano">3º Ano</option>
                            <option value="4º Ano">4º Ano</option>
                            <option value="5º Ano">5º Ano</option>
                            <option value="6º Ano">6º Ano</option>
                            <option value="7º Ano">7º Ano</option>
                            <option value="8º Ano">8º Ano</option>
                            <option value="9º Ano">9º Ano</option>
                        </select>
                    </div>

                    <!-- Turma -->
                    <div class="input-item">
                        <label for="turma">Turma</label>
                        <select id="turma" name="turma" required>
                            <option value="" disabled selected>Selecione a turma</option>
                            <option value="A">Turma A</option>
                            <option value="B">Turma B</option>
                            <option value="C">Turma C</option>
                        </select>
                    </div>

                    <!-- Materia -->
                    <div class="input-item">
                        <label for="materia">Materia</label>
                        <select id="materia" name="materia" required>
                            <option value="" disabled selected>Selecione a matéria</option>
                            <option value="Português">Português</option>
                            <option value="Matemática">Matemática</option>
                            <option value="Ciência">Ciência</option>
                            <option value="História">História</option>
                            <option value="Geografia">Geografia</option>
                        </select>
                    </div>

                    <!-- Criar campo para editar chamada e automaticamente incluir uma justificativa -->

                    <!-- Botão Buscar -->
                     <div class="input-item">
                        <label id="oculto" for="">Buscar alunos</label>
                        <button type="submit" class="buscar-button-alunos">
                            <i class="fas fa-search"></i> Buscar Alunos
                        </button>
                     </div>

                </div>
            </form>


            <!-- Tabela de Chamada -->
            <div class="tabela-chamada">
                <form method="POST" action="salvar_chamada.php">
                    <table>
                        <thead>
                            <tr>
                                <th>Nome do Aluno</th>
                                <th>Presença</th>
                                <th>Falta</th>
                                <th>Atestado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>João Silva</td>
                                <td><input type="radio" name="aluno_1" value="presenca"></td>
                                <td><input type="radio" name="aluno_1" value="falta"></td>
                                <td><input type="radio" name="aluno_1" value="atestado"></td>
                            </tr>
                            <tr>
                                <td>Maria Souza</td>
                                <td><input type="radio" name="aluno_2" value="presenca"></td>
                                <td><input type="radio" name="aluno_2" value="falta"></td>
                                <td><input type="radio" name="aluno_2" value="atestado"></td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="salvar-button">
                        <i class="fas fa-save"></i> Salvar Chamada
                    </button>
                </form>
            </div>
        </section>
    </main>
</body>

</html>
