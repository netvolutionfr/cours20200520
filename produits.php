<?php
header('Content-Type: application/json');

require_once('connexion.php');

$requete = $bdd->query('SELECT * FROM produits');


if (isset($_GET['id'])) {
    $requete = $bdd->prepare('SELECT * FROM produits WHERE id=?');
    $requete->bindParam(1, $_GET['id']);
    $requete->execute();
    if ($produit = $requete->fetch(PDO::FETCH_ASSOC)) {
        echo json_encode($produit);
    }
} else {
    $produits = array();
    $requete = $bdd->query('SELECT * FROM produits');
    while ($data = $requete->fetch(PDO::FETCH_ASSOC)) {
        $produits[] = $data;
    }
    echo json_encode($produits);
}
