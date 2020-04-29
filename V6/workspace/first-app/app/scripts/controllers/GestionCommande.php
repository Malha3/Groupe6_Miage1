
<?php
session_start();

include_once ('C:\xampp\htdocs\workspace\first-app\app\models\class_PDO.php');

if (isset($_POST['mobile']) && isset($_POST['nombreMobile'])) {

$_SESSION['mobileCommander'] = $_POST['mobile'];
$_SESSION['nbMobileCommander'] = $_POST['nombreMobile'];

require_once ('C:\xampp\htdocs\workspace\first-app\app\views\PaiementCommande.php');

}


//if(){
//verifier paiement

//realiser les ajout après le paiement

//afficher page de réussite et proposer retour à la page de commande et page d'accueil


//}







?>