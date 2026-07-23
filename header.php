<!DOCTYPE html>
<html lang="fr">
<?php
require_once("config.inc.php");

try {
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USERNAME, DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
<head>
    <title>ZooLogik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<header class="mb-3">
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-success" href="<?= SITE_URL; ?>/home.php">ZooLogik</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item ms-3">
                        <a class="btn btn-success rounded-pill" href="<?= SITE_URL; ?>/home.php">
                            <i class="fa-solid fa-house"></i> Accueil
                        </a>
                    </li>
                    <li class="nav-item dropdown ms-3">
                        <a class="btn btn-success rounded-pill dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-circle-user"></i> Employés
                        </a>
                        <ul class="dropdown-menu shadow">
                            <li><a class="dropdown-item" href="<?= SITE_URL;?>/employe/liste.php">Liste des employés</a></li>
                            <li><a class="dropdown-item" href="<?= SITE_URL; ?>/employe/create.php">Ajouter un employé</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown ms-3">
                        <a class="btn btn-success rounded-pill dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-ghost"></i> Menaces
                        </a>
                        <ul class="dropdown-menu shadow">
                            <li><a class="dropdown-item" href="<?= SITE_URL;?>/menace/liste.php">Liste des menaces</a></li>
                            <li><a class="dropdown-item" href="<?= SITE_URL; ?>/menace/create-update.php">Ajouter une menace</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown ms-3">
                        <a class="btn btn-success rounded-pill dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-apple-whole"></i> Aliment
                        </a>
                        <ul class="dropdown-menu shadow">
                            <li><a class="dropdown-item" href="<?= SITE_URL;?>/aliment/liste.php">Liste des aliments</a></li>
                            <li><a class="dropdown-item" href="<?= SITE_URL; ?>/aliment/create-update.php">Ajouter un aliment</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-globe"></i> Géographie
                        </a>
                        <ul class="dropdown-menu shadow">
                            <li><a class="dropdown-item" href="<?= SITE_URL;?>/geographie/liste.php">Liste des zones géographique</a></li>
                            <li><a class="dropdown-item" href="<?= SITE_URL; ?>/geographie/create-update.php">Ajouter un zone géographique</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-children"></i> Famille
                        </a>
                        <ul class="dropdown-menu shadow">
                            <li><a class="dropdown-item" href="<?= SITE_URL;?>/famille/liste.php">Liste des familles</a></li>
                            <li><a class="dropdown-item" href="<?= SITE_URL; ?>/famille/create-update.php">Ajouter une famille</a></li>
                        </ul>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main class="container mt-5">