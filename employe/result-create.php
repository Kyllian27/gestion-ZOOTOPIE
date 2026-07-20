<?php
require_once("../header.php");
if (isset($_POST['nom']) && isset ($_POST['prenom']) && isset($_POST['poste'])) :
    if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['poste'])) :
        echo "Erreur, un champ est vide";
    else:
        try {
            $sql = "INSERT INTO employe(nom_emp,prenom_emp,poste_emp)VALUES(:nom,:prenom,:poste)";
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':nom', trim($_POST['nom']));
            $stmt->bindValue(':prenom',trim( $_POST['prenom']));
            $stmt->bindValue(':poste', trim($_POST['poste']));
            $stmt->execute();?>
            <div> class="alert alert-succese"
                 l'employer a bien etait crée .
            </div>
        <?php
        }catch(PDOException $e){
                echo $e->getMessage();

        }
        echo " c'est tout bon";
    endif;
else:
    echo "erreur il y a eu une erreur";
endif;

