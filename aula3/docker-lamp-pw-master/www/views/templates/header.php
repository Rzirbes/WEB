<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css" />

    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--JavaScript-->
    <script>
        document.getElementById("demo").innerHTML = "My First JavaScript";
    </script>
        
    <script src="assets/js/JavaScript.js"></script>
</head>
<body>

    <header class="jumbotron text-center">
        <h1>CABEÇALHO</h1>
    </header>

    <section class="row bg-secondary text-white justify-content-center">
        <nav class="col-md-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a id="home" class="nav-link" href="?page=home">home</a>
                </li>
                <li class="nav-item">
                    <a id="about" class="nav-link" href="?page=about">about</a>
                </li>
                <li class="nav-item">
                    <a id="contact" class="nav-link" href="?page=contact">contact</a>
                </li>
                <li class="nav-item">
                    <a id="product" class="nav-link" href="?page=products">products</a>
                </li>
            </ul>
        </nav>

        <article class="col-md-9 bg-dark text-white">