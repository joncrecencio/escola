<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../public/css/styles.css">
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/formularios.css">
    <title>Gestão de Professores</title>
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
        <!-- Barra de pesquisa e botão adicionar -->
        <section class="search-section">
            <input type="text" class="search-bar" placeholder="Pesquisar professor...">
            <a href="cadastrar_professor.php" class="add-button">
                <i class="fas fa-user-plus"></i> Novo Professor
            </a>
        </section>

        <!-- Tabela de Professores -->
        <section class="table-section">
            <table class="responsavel-table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Linha 1 -->
                    <tr>
                        <td><i class="fas fa-user icon_user"></i> Ana Pereira</td>
                        <td><i class="fas fa-id-card icon_user"></i> 111.222.333-44</td>
                        <td><i class="fas fa-envelope icon_user"></i> ana.pereira@email.com</td>
                        <td><i class="fas fa-phone icon_user"></i> (11) 91234-5678</td>
                        <td>
                            <a href="editar_professor.php" class="edit-button">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button class="delete-button">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <!-- Linha 2 -->
                    <tr>
                        <td><i class="fas fa-user icon_user"></i> Pedro Santos</td>
                        <td><i class="fas fa-id-card icon_user"></i> 555.666.777-88</td>
                        <td><i class="fas fa-envelope icon_user"></i> pedro.santos@email.com</td>
                        <td><i class="fas fa-phone icon_user"></i> (21) 92345-6789</td>
                        <td>
                            <a href="editar_professor.php" class="edit-button">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button class="delete-button">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <!-- Linha 3 -->
                    <tr>
                        <td><i class="fas fa-user icon_user"></i> Carla Fernandes</td>
                        <td><i class="fas fa-id-card icon_user"></i> 999.888.777-66</td>
                        <td><i class="fas fa-envelope icon_user"></i> carla.fernandes@email.com</td>
                        <td><i class="fas fa-phone icon_user"></i> (31) 93456-7890</td>
                        <td>
                            <a href="editar_professor.php" class="edit-button">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button class="delete-button">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

</body>
</html>
