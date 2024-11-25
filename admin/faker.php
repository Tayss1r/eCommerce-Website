<?php
require_once'../connexion.php';

$conn = new connexion();
$pdo = $conn->getConnexion();

$sql="";

for ($i=1; $i < 100; $i++) { 
    $lib = "produit n°" .$i;
    $prix = random_int(1,9000);
    $qte = random_int(1,900);
    $des = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias nemo cum magni laudantium. Et animi molestiae dolorem quisquam, sunt explicabo libero enim distinctio! Consectetur nam sunt vitae laboriosam aut nesciunt.";
    $img = "https://picsum.photos/400?id=$i";
    $pro = random_int(0,1);
    $sql = $sql."insert into produit values (NULL,'$lib','$prix','$qte','$des','$img','$pro');";
}
$res =$pdo->exec($sql);