<?php
header('Content-Type: application/json');

$donnees = array();

$donnees[] = array(
    'nom' => 'Humez',
    'prenom' => 'Stanis'
);

$donnees[] = array(
    'nom' => 'Toto',
    'prenom' => 'Titi'
);



echo json_encode($donnees);

/*
 *
 * [
 *      {
 *          "nom":"Humez",
 *          "prenom":"Stanis"
 *      },
 *      {
 *          "nom":"Toto",
 *          "prenom":"Titi"
 *      }
 * ]
 */