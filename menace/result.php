<div class="container">
        <div class="row">
            <div class="col">
            </div>
        </div>
    </div>
<?php
$sql="";
$params=[];
$phrase_reussite = "la menace a bien etait";
require('../header.php');
if (!empty($_POST['action'])) :
    switch ($_POST['action']) :
        case 'create':
            $sql='INSERT INTO menace (libelle_menace) VALUES(:libelle)';
            $params=[
                    ':libelle'=>$_POST['libelle']
            ];
            $phrase_reussite .= " ajoutée.";
            break;
        case 'update':
            $sql='UPDATE menace SET libelle_menace=:id_menace';
                    $params=[
                            'libelle'=>$_POST['libelle'],
                        'id'=>$_POST['id']
                    ];
            $phrase_reussite .= " modifier";
            break;
        case 'delete':
            $sql='DELETE FROM menace WHERE id_menace=:id';
            $params=[
                    ':id'=>$_POST['id']
            ];
            $phrase_reussite .= " supprimé ";
            break;
        default:
            break;
    endswitch;
endif;
if (!empty($sql)) :
    try{
    $stmt = $db->prepare($sql);
    $stmt->execute($params);
    echo "<div class='alert alert-success '>$phrase_reussite </div>";
    }catch (PDOException $e){
        echo "<div class='alert alert-danger'>" . $e->getMessage() ."</div>";
    }
endif;

?>
<?php
require('../footer.php');
?>