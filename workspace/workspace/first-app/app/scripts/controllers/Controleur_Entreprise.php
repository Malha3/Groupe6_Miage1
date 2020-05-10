<?php

require_once ('C:\xampp\htdocs\workspace\first-app\app\views\AjouterEntreprise.php');

require_once ('C:\xampp\htdocs\workspace\first-app\app\models\class_Pdo.php');

if(isset($_POST['insert'])){
// récupérer les valeurs 

$nom = $_POST['nom'];
$nomDirecteur = $_POST['nomDirecteur'];
$adresse = $_POST['adresse'];


PdoGm::ajout_Entreprise($nom,$nomDirecteur,$adresse);

/*if(PdoGm::ajout_Entreprise($nom,$nomDirecteur,$adresse)== false){
  echo 'échec de linsertion ';
}*/
}
?>