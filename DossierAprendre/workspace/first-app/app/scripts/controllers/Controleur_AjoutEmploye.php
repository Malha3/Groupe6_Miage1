<?php
session_start();
require_once ('C:\xampp\htdocs\workspace\first-app\app\scripts\controllers\Controleur_Connexion.php');
require_once ('C:\xampp\htdocs\workspace\first-app\app\views\PageAjoutEmploye.php');
require_once ('C:\xampp\htdocs\workspace\first-app\app\models\class_Pdo.php');

if(isset($_POST['insert'])){
// récupérer les valeurs 

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$poste = $_POST['poste'];
$idEntreprise = $_SESSION['idGestionnaire'];
$login = $_POST['login'];
$mdp =  $_POST['mdp'];
$id = "1";
$forfait=null;
$mobile=null;
PdoGm::ajout_Employe($id,$nom,$prenom,$mail,$poste,$idEntreprise,$login,$mdp,$forfait,$mobile);

/*if(PdoGm::ajout_Employe($id,$nom,$prenom,$mail,$poste,$idEntreprise,$login,$mdp,$forfait,$mobile)== true){
  echo 'échec de linsertion à échoué ';
}*/
}
?>

