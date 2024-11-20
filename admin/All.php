<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>

</head>
<body>
    <?php
    require_once "../connexion.php";
    $connexion = new connexion();
    $pdo = $connexion->getConnexion();
    $sql = "select * from produit";
    $res = $pdo->query($sql); //$res est un objet de la PDOStatement
    $produits = $res->fetchAll(PDO::FETCH_NUM);

    echo"<pre>";
    print_r($produits);
    echo"</pre>";
    ?>

</body>
</html>