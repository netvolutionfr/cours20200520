<?php
$login = 'cours20200520';
$password = 'i763nVvHzJjp';
$host = 'localhost';
$database = 'cours20200520';


try {
    $bdd = new PDO('mysql:host='.$host.';dbname='.$database.';charset=utf8', $login, $password);
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}