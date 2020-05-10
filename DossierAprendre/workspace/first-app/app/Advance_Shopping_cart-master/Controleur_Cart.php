<?php
session_start();
require_once ('C:\xampp\htdocs\workspace\first-app\app\scripts\controllers\Controleur_Connexion.php');
require_once ('C:\xampp\htdocs\workspace\first-app\app\models\class_Pdo.php');
require_once ("php/component.php");



$quantite = $_POST['qte'];
$idMobile = $_POST['id'];
$idGestionnaire = $_SESSION['idGestionnaire'];

PdoGm::ajouter_Mobile($quantite,$idMobile,$idGestionnaire);

require_once ('C:\xampp\htdocs\workspace\first-app\app\Advance_Shopping_cart-master\index.php');
?>