<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../public/css/styles.css">
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/formularios.css">
    <title>Gestão de Cursos</title>
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
            <input type="text" class="search-bar" placeholder="Pesquisar curso...">
            <a href="cadastrar_curso.php" class="add-button"><i class="fas fa-plus"></i> Novo Curso</a>
        </section>

        <section class="table-section">
            <table class="responsavel-table">
                <thead>
                    <tr>
                        <th>Nome do Curso</th>
                        <th>Descrição</th>
                        <th>Carga Horária</th>
                        <th>Período</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><i class="fas fa-book icon_user"></i> Matemática Básica</td>
                        <td><i class="fas fa-info-circle icon_user"></i> Curso introdutório de matemática</td>
                        <td><i class="fas fa-clock icon_user"></i> 40 horas</td>
                        <td><i class="fas fa-calendar icon_user"></i> Matutino</td>
                        <td>
                            <a href="editar_curso.php" class="edit-button"><i class="fas fa-edit"></i></a>
                            <button class="delete-button"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-book icon_user"></i> Inglês Avançado</td>
                        <td><i class="fas fa-info-circle icon_user"></i> Curso de conversação em inglês</td>
                        <td><i class="fas fa-clock icon_user"></i> 60 horas</td>
                        <td><i class="fas fa-calendar icon_user"></i> Noturno</td>
                        <td>
                            <a href="editar_curso.php" class="edit-button"><i class="fas fa-edit"></i></a>
                            <button class="delete-button"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-book icon_user"></i> Programação Web</td>
                        <td><i class="fas fa-info-circle icon_user"></i> Curso de desenvolvimento de sites</td>
                        <td><i class="fas fa-clock icon_user"></i> 80 horas</td>
                        <td><i class="fas fa-calendar icon_user"></i> Vespertino</td>
                        <td>
                            <a href="editar_curso.php" class="edit-button"><i class="fas fa-edit"></i></a>
                            <button class="delete-button"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

</body>
</html>
