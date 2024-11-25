<?php

$id = $_GET['id'];

require_once '../connexion.php';
$conn = new connexion();
$pdo = $conn->getConnexion(); // PDOStatement

$sql = "delete from produit where id =$id";
$res = $pdo->exec($sql);
header('location:All.php');
