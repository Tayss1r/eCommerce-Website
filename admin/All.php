<?php
    ob_start();
?>

<?php 
require_once'../connexion.php';
include 'faker.php';

$connexion =new connexion();
$pdo= $connexion->getConnexion();
$sql='select * from produit';
$res=$pdo->query($sql);
$lesproduits=$res->fetchAll(PDO::FETCH_NUM);
?>
<table class="table">
    <tr>
        <th>id</th>
        <th>libelle</th>
        <th>prix</th>
        <th>quantite</th>
        <th colspan="3">Action</th>
    </tr>
    <?php
    foreach ($lesproduits as $produit) {?>
     <tr>
        <td><?= $produit[0] ?></td>
        <td><?= $produit[1] ?></td>
        <td><?= $produit[2] ?></td>
        <td><?= $produit[3] ?></td>
        <td><a href="detail.php?id=<?= $produit[0] ?>" class="btn btn-info btn-sm">Voir Détail...</a></td>
        <td><a href="Delete.php?id=<?= $produit[0] ?>" class="btn btn-danger btn-sm">Supprimer</a></td>
        <td><a href="update.php?id=<?= $produit[0] ?>" class="btn btn-dark btn-sm">Edit</a></td>
     </tr>
    <?php    
    }
    ?>
</table>

<?php
    $contenu = ob_get_clean();
    $titre = 'Les produits';
    include 'layout.php'
?>
