<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../public/css/styles.css">
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/formularios.css">
    <title>Gestão de Alunos</title>
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
    <main class="responsavel-container">
        <section class="search-section">
            <input type="text" class="search-bar" placeholder="Pesquisar aluno...">
            <a href="cadastrar_aluno.php" class="add-button"><i class="fas fa-user-plus"></i> Novo Aluno</a>
        </section>

        <section class="table-section">
            <table class="responsavel-table">
                <thead>
                    <tr>
                        <th>Nome do Aluno</th>
                        <th>Nome do Responsável</th>
                        <th>RE do Aluno</th>
                        <th>Email do Aluno</th>
                        <th>Turma</th>
                        <th>Período</th>
                        <th>Ano</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><i class="fas fa-user icon_user"></i> Ana Clara</td>
                        <td><i class="fas fa-user-tie icon_user"></i> João da Silva</td>
                        <td><i class="fas fa-id-card icon_user"></i> 123456</td>
                        <td><i class="fas fa-envelope icon_user"></i> ana.clara@email.com</td>
                        <td><i class="fas fa-chalkboard icon_user"></i> 5º Ano</td>
                        <td><i class="fas fa-clock icon_user"></i> Matutino</td>
                        <td><i class="fas fa-calendar icon_user"></i> 2024</td>
                        <td>
                            <a href="editar_aluno.php" class="edit-button"><i class="fas fa-edit"></i></a>
                            <button class="delete-button"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-user icon_user"></i> Lucas Pereira</td>
                        <td><i class="fas fa-user-tie icon_user"></i> Maria Oliveira</td>
                        <td><i class="fas fa-id-card icon_user"></i> 654321</td>
                        <td><i class="fas fa-envelope icon_user"></i> lucas.pereira@email.com</td>
                        <td><i class="fas fa-chalkboard icon_user"></i> 6º Ano</td>
                        <td><i class="fas fa-clock icon_user"></i> Vespertino</td>
                        <td><i class="fas fa-calendar icon_user"></i> 2024</td>
                        <td>
                            <a href="editar_aluno.php" class="edit-button"><i class="fas fa-edit"></i></a>
                            <button class="delete-button"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-user icon_user"></i> Beatriz Santos</td>
                        <td><i class="fas fa-user-tie icon_user"></i> Carlos Souza</td>
                        <td><i class="fas fa-id-card icon_user"></i> 789123</td>
                        <td><i class="fas fa-envelope icon_user"></i> beatriz.santos@email.com</td>
                        <td><i class="fas fa-chalkboard icon_user"></i> 7º Ano</td>
                        <td><i class="fas fa-clock icon_user"></i> Noturno</td>
                        <td><i class="fas fa-calendar icon_user"></i> 2024</td>
                        <td>
                            <a href="editar_aluno.php" class="edit-button"><i class="fas fa-edit"></i></a>
                            <button class="delete-button"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

</body>
</html>