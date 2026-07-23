<?php
require_once("../header.php");
?>
<div class="container">
    <div class="row mb-3">
        <div class="col text-centerdiv d-flex justify-content-center text-primary p-3 mb-2 ">
            <h1>Liste des aliments</h1>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col d-flex justify-content-center">
            <a href="<?=SITE_URL?>/aliment/create-update.php" class="btn btn-outline-primary btn-lg">
                <i class=" fa-solid fa-circle-plus "></i> Ajouter un aliments◘
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table theard-dark">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Code</th>
                            <th>Nom</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $stmt = $db->query("SELECT * FROM aliment");
                        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        foreach($rows as $aliment) :
                            ?>
                            <tr>
                                <td><?= $aliment['id_aliment']; ?></td>
                                <td><?= $aliment['code_aliment']; ?></td>
                                <td><?= $aliment['nom_aliment']; ?></td>
                                <td><?= $aliment['stock_aliment']; ?></td>
                                <td>
                                    <form action="<?= SITE_URL; ?>/aliment/create-update.php" method="POST" class="d-inline">
                                        <input type="hidden" name="id" value="<?= $aliment['id_aliment']; ?>">
                                        <button type="submit" class="btn btn-primary btn-sm me-1">
                                            <i class="fa fa-solid fa-pencil"></i>
                                        </button>
                                    </form>
                                    <form action="<?= SITE_URL; ?>/aliment/result.php" method="POST" class="d-inline" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette aliment')">
                                        <input type="hidden" name="id" value="<?= $aliment['id_aliment']; ?>">
                                        <button type="submit" class="btn btn-danger btn-sm me-1" name="action" value="delete">
                                            <i class="fa fa-solid fa-trash-alt"></i>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        <?php
                        endforeach;
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once("../footer.php");
?>