<?php

include_once ('C:\xampp\htdocs\workspace\first-app\app\models\class_PDO.php');

/*session_start();
session_destroy();
header('location: C:\xampp\htdocs\workspace\first-app\app\views\Connexion.php');
exit;

----*/
// Suppression de toutes les variables et destruction de la session
session_start();
$_SESSION = array();
session_destroy();

//include 'C:\xampp\htdocs\workspace\first-app\app\views\Connexion.php';
echo "déconnexion ok";

header('Location: \workspace\first-app\app\views\Connexion.php');
?>