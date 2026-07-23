<!DOCTYPE html>
<html lang="fr">
<?php
require_once("config.inc.php");
?>
<head>
    <title>ZooLogik - Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

<header class="mb-3">
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-success" href="<?= SITE_URL; ?>">ZooLogik</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item ms-3">
                        <a class="btn btn-success rounded-pill" aria-current="page" href="<?= SITE_URL; ?>">
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
                </ul>
            </div>
        </div>
    </nav>
</header>

<main class="container mt-5">
    <div class="p-5 mb-4 bg-body-tertiary rounded-3 shadow-sm border">
        <div class="container-fluid py-5 text-center">
            <h1 class="display-5 fw-bold text-success mb-3"><i class="fa-solid fa-paw"></i> Bienvenue sur ZooLogik</h1>
            <p class="col-md-8 mx-auto fs-5 text-muted">Votre application professionnelle de gestion de parc zoologique. Supervisez vos équipes, anticipez les risques et suivez les stocks de nourriture en toute simplicité.</p>
        </div>
    </div>

    <div class="row g-4 text-center mt-2">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body p-4">
                    <div class="text-success mb-3"><i class="fa-solid fa-users fa-3x"></i></div>
                    <h5 class="card-title fw-bold">Gestion des Employés</h5>
                    <p class="card-text text-muted">Gérez les plannings, les rôles et l'accès des soigneurs du zoo.</p>
                    <a href="<?= SITE_URL;?>/employe/liste.php" class="btn btn-outline-success rounded-pill">Accéder à la liste</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body p-4">
                    <div class="text-success mb-3"><i class="fa-solid fa-triangle-exclamation fa-3x"></i></div>
                    <h5 class="card-title fw-bold">Suivi des Menaces</h5>
                    <p class="card-text text-muted">Contrôlez les incidents, les enclos à risques et la sécurité du parc.</p>
                    <a href="<?= SITE_URL;?>/menace/liste.php" class="btn btn-outline-success rounded-pill">Voir les menaces</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body p-4">
                    <div class="text-success mb-3"><i class="fa-solid fa-wheat-awn fa-3x"></i></div>
                    <h5 class="card-title fw-bold">Rations & Aliments</h5>
                    <p class="card-text text-muted">Suivez les stocks de nourriture et planifiez les repas des animaux.</p>
                    <a href="<?= SITE_URL;?>/aliment/liste.php" class="btn btn-outline-success rounded-pill">Gérer les stocks</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
try{
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USERNAME, DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    echo $e->getMessage();
}
?>
</body>
</html>