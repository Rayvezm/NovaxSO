<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$page = $components[2];
?>

<!DOCTYPE html>

<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Página oficial de Novax Solutions">
    <meta name="language" content="spanish">
    <meta name="copyright" content="Novax Solutions">
    <meta name="designer" content="Rayve Zerpa-2023 (Novax Solutions)">
    <meta name="audience" content="all">
    <meta name="keywords" content="Novax,Servicios Informáticos,Diseño Gráfico,Desarrollo Web">
    <meta name="robots" content="idex, all, follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="./bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="icon" type="image-x-icon" href="img/minilogo.png">
    <title>Novax Solutions</title>
    <link rel="stylesheet" href="css/theme.min.css">
</head>

<body class="bg-n text-white">
    <!-- menu -->
    <nav class="navbar bg-n navbar-expand-lg h-5">
        <div class="container-fluid bg-n">
            <img src="./img/logo.png" alt="Logo de Novax" class="anch justify-content-center pa">
            <button class="navbar-toggler bg-b" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-white"></span>
                <br>
            </button>
            <div class="collapse navbar-collapse bg-n text-center" id="navbarTogglerDemo02" data-simplebar="" data-simplebar-auto-hide="true">
                <ul class="navbar-nav mx-auto bg-n mb-2 mb-lg-0 list-group list-group-vertical sidebar-menu do-nicescrol nav">
                    <li class="nav-item">
                        <a class="<?php if ($page == "index.php") {
                                                                                                echo "nav-link link link-fancy-light";
                                                                                            } else {
                                                                                                echo "nav-link link";
                                                                                            } ?> mx-2 fs-5 text-white mt-0 px-2" aria-current="page" href="./index.php" aria-label="Inicio">
                            Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="<?php if ($page == "servicios-informaticos.php") {
                                                                                                echo "nav-link link link-fancy-light";
                                                                                            } else {
                                                                                                echo "nav-link link";
                                                                                            } ?> mx-2 fs-5 text-white mt-0 px-2"  href="./servicios-informaticos.php" aria-label="Servicios Informáticos">
                            Servicios Informáticos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="<?php if ($page == "d-grafico.php") {
                                                                                                echo "nav-link link link-fancy-light";
                                                                                            } else {
                                                                                                echo "nav-link link";
                                                                                            } ?> mx-2 fs-5 text-white mt-0 px-2"  href="./d-grafico.php" aria-label="Diseño Gráfico">
                            Diseño Gráfico
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>