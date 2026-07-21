<!DOCTYPE html>
<html lang="fr">
<?php
// Ingrédient de configuration indispensable
require_once("config.inc.php");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoologik</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome (Icônes) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Ton fichier CSS personnalisé -->
    <link rel="stylesheet" href="../style.css">

    <style>
        .navbar {
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            padding: 0.8rem 1rem;
        }
        .navbar-brand {
            font-weight: 700;
            color: #2c3e50;
            letter-spacing: 0.5px;
        }
        .nav-link {
            font-weight: 500;
            transition: color 0.2s ease;
        }
        .nav-link:hover {
            color: #198754 !important; /* Vert Zoologik au survol */
        }
    </style>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <!-- Lien vers l'accueil de ton site -->
            <a class="navbar-brand d-flex align-items-center" href="<?= SITE_URL; ?>">
                <i class="fa-solid fa-paw me-2 text-success"></i>Zoologik
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= SITE_URL; ?>">
                            <i class="fa-solid fa-house me-1"></i> Accueil
                        </a>
                    </li>
                    <li class="nav-item">
                        <!-- Exemple de lien vers une page liste des employés -->
                        <a class="nav-link" href="<?= SITE_URL; ?>/employes.php">Employés</a>
                    </li>
                    <li class="nav-item">
                        <!-- Exemple de lien vers une page d'ajout -->
                        <a class="nav-link" href="<?= SITE_URL; ?>/ajouter.php">Ajouter</a>
                    </li>

                    <!-- Menu Déroulant (Gestion des Actions) -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Actions
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0">
                            <!-- CORRECTION : Le guillemet de fermeture et la balise PHP sont maintenant parfaits -->
                            <li><a class="dropdown-item" href="<?= SITE_URL; ?>/action.php">Gérer les actions</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Paramètres</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main class="container mt-5">
    <!-- Le reste de ton application Zoologik s'affichera ici -->
</main>

<?php
// Connexion sécurisée à la base de données
try {
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USERNAME, DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "<div class='alert alert-danger mt-3 container'>Erreur de connexion : " . htmlspecialchars($e->getMessage()) . "</div>";
}
?>

<!-- Scripts Bootstrap indispensables au fonctionnement des menus déroulants et du bouton mobile -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
