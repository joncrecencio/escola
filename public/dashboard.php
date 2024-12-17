<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/scroll.css">
    <link rel="stylesheet" href="../public/css/styles.css">
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Dashboard</title>
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

    
    <!-- Dashboard -->
    <div class="dashboard" id="dashboard">
        <!-- Cards existentes -->
        <a href="responsavel.php" class="card">
            <i class="fas fa-user-plus"></i>
            <span>Responsável</span>
        </a> 

        <a href="aluno.php" class="card">
            <i class="fas fa-user-graduate"></i>
            <span>Aluno</span>
        </a>

        <a href="curso.php" class="card">
            <i class="fas fa-book"></i>
            <span>Cursos</span>
        </a> <!-- caso for escola publica ou particular, colocar como padrão por ex: Ensino Fundamental -->

        <a href="materia.php" class="card">
            <i class="fas fa-book"></i>
            <span>Matérias</span>
        </a>

        <a href="professor.php" class="card">
            <i class="fas fa-chalkboard-teacher"></i>
            <span>Professores</span>
        </a>

        <a href="" class="card">
            <i class="fas fa-clipboard-list"></i>
            <span>Chamada</span>
        </a>

        <a href="" class="card">
            <i class="fas fa-book-open"></i>
            <span>Boletim</span>
        </a>

        <a href="" class="card">
            <i class="fas fa-chart-line"></i>
            <span>Relatórios</span>
        </a>

        <a href="" class="card">
            <i class="fas fa-calendar"></i>
            <span>Calendário</span>
        </a>

        <a href="" class="card">
            <i class="fas fa-bell"></i>
            <span>Notificação</span>
        </a>

        <a href="" class="card">
            <i class="fas fa-users-cog"></i>
            <span>Funcionários</span>
        </a>

        <a href="" class="card">
            <i class="fas fa-user-tie"></i>
            <span>Administrador</span>
        </a>

        <a href="" class="card">
            <i class="fas fa-cogs"></i>
            <span>Autogestão</span>
        </a>
    </div>
    <!--  -->
    <script src="../public/js/dashboard.js"></script>
</body>
</html>
