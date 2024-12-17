<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../public/css/styles.css">
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/formularios.css">
    <title>Gestão de Matérias</title>
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
            <input type="text" class="search-bar" placeholder="Pesquisar matéria...">
            <a href="cadastrar_materia.php" class="add-button"><i class="fas fa-plus"></i> Nova Matéria</a>
        </section>

        <section class="table-section">
            <table class="responsavel-table">
                <thead>
                    <tr>
                        <th>Nome da Matéria</th>
                        <th>Curso</th>
                        <th>Professor</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><i class="fas fa-book icon_user"></i> Matemática Básica</td>
                        <td><i class="fas fa-graduation-cap icon_user"></i> Curso Técnico em Informática</td>
                        <td><i class="fas fa-user icon_user"></i> João Silva</td>
                        <td>
                            <a href="editar_materia.php" class="edit-button"><i class="fas fa-edit"></i></a>
                            <button class="delete-button"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-book icon_user"></i> Programação Web</td>
                        <td><i class="fas fa-graduation-cap icon_user"></i> Curso Técnico em Desenvolvimento Web</td>
                        <td><i class="fas fa-user icon_user"></i> Maria Oliveira</td>
                        <td>
                            <a href="editar_materia.php" class="edit-button"><i class="fas fa-edit"></i></a>
                            <button class="delete-button"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-book icon_user"></i> Inglês Avançado</td>
                        <td><i class="fas fa-graduation-cap icon_user"></i> Curso de Idiomas</td>
                        <td><i class="fas fa-user icon_user"></i> Ana Souza</td>
                        <td>
                            <a href="editar_materia.php" class="edit-button"><i class="fas fa-edit"></i></a>
                            <button class="delete-button"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>
