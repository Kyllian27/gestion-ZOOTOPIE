<?php
require_once("../header.php");
?>

    <div class="container my-5">
        <!-- En-tête de la page -->
        <div class="row mb-4 align-items-center">
            <div class="col-md-6">
                <h1 class="h2 fw-bold text-dark mb-1">Espace Collaborateurs</h1>
                <p class="text-muted mb-0">Gérez l'ensemble des employés de Zoologik</p>
            </div>
            <div class="col-md-6 text-md-end mt-3 mt-md-0">
                <a href="<?= SITE_URL ?>/employe/create.php" class="btn btn-primary px-4 py-2 shadow-sm fw-semibold">
                    <i class="fa-solid fa-user-plus me-2"></i> Nouvel Employé
                </a>
            </div>
        </div>

        <!-- Tableau des employés -->
        <div class="card shadow-sm border-0 overflow-hidden">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-dark text-white table-dark">
                        <tr>
                            <th class="py-3 ps-4" style="width: 10%"># ID</th>
                            <th class="py-3" style="width: 25%">Nom</th>
                            <th class="py-3" style="width: 25%">Prénom</th>
                            <th class="py-3" style="width: 25%">Poste occupé</th>
                            <th class="py-3 text-center" style="width: 15%">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $stmt = $db->query("SELECT * FROM employe");
                        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

                        if (count($rows) > 0) :
                            foreach($rows as $employe) :
                                ?>
                                <tr>
                                    <td class="ps-4 fw-bold text-secondary">#<?= $employe['id_employe']; ?></td>
                                    <td class="fw-semibold text-dark"><?= mb_strtoupper($employe['nom_emp']); ?></td>
                                    <td class="text-secondary"><?= ucfirst($employe['prenom_emp']); ?></td>
                                    <td>
                                    <span class="badge bg-light text-primary border border-primary-subtle px-3 py-2 rounded-pill fw-medium">
                                        <i class="fa-solid fa-briefcase me-1.5 small"></i><?= $employe['poste_emp']; ?>
                                    </span>
                                    </td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center gap-2">
                                            <!-- Bouton Modifier -->
                                            <a href="<?= SITE_URL; ?>/employe/creat.php?id=<?= $employe['id_employe']; ?>" class="btn btn-sm btn-outline-warning rounded-circle p-2 d-inline-flex align-items-center justify-content-center" style="width: 35px; height: 35px;" title="Modifier">
                                                <i class="fa-solid fa-pencil fs-6"></i>
                                            </a>
                                            <!-- Bouton Supprimer -->
                                            <a href="<?= SITE_URL; ?>/employe/result-delete.php?id=<?= $employe['id_employe']; ?>" class="btn btn-sm btn-outline-danger rounded-circle p-2 d-inline-flex align-items-center justify-content-center" style="width: 35px; height: 35px;" title="Supprimer" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet employé ?');">
                                                <i class="fa-solid fa-trash-alt fs-6"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            endforeach;
                        else :
                            ?>
                            <tr>
                                <td colspan="5" class="text-center py-5 text-muted">
                                    <div class="mb-3 display-6 text-body-tertiary">
                                        <i class="fa-solid fa-user-slash"></i>
                                    </div>
                                    <h5 class="fw-semibold">Aucun employé enregistré</h5>
                                    <p class="small mb-0">Cliquez sur "Nouvel Employé" pour commencer à remplir votre base.</p>
                                </td>
                            </tr>
                        <?php
                        endif;
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php
require_once("../footer.php");
?>