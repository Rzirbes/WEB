<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Arquivo CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Arquivo javascript -->
    <script src="assets/js/script.js"></script>

</head>

<body class="bg-secondary">
    <header id="cabecalho" class="p-5 bg-dark text-white rounded">
        <h1>Cabeçalho</h1>
    </header>

    <section class="row justify-content-center">
        <?php
        $page = isset($_GET['action']) ? $_GET['action'] : 'home'; // Define a página padrão como "home" se nenhum parâmetro for passado na URL
        ?>
        <nav >
            
                <ul class="nav nav-tabs justify-content-center">
                    <li class="nav-item">
                        <a id="home" class="nav-link <?php if ($page == 'home') echo 'active'; ?>" href="?controller=site&action=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a id="about" class="nav-link <?php if ($page == 'about') echo 'active'; ?>" href="?controller=site&action=about">About</a>
                    </li>
                    <li class="nav-item">
                        <a id="product" class="nav-link <?php if ($page == 'products') echo 'active'; ?>" href="?controller=site&action=products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a id="contact" class="nav-link <?php if ($page == 'contact') echo 'active'; ?>" href="?controller=site&action=contact">Contact</a>
                    </li>
           

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Clientes</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?controller=client&action=insertClient">Cadastro</a></li>
                    <li><a class="dropdown-item" href="?controller=client&action=listClients">Listar Clientes</a></li>
                </ul>
            </li>

            </ul>

        </nav>

        <article class="col-sm-11">