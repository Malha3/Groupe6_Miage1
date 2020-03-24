<?php
require('scripts/controllers/Connexion_BDD.php');
include('models/class_Pdo.php');
include('models/Modèle.php');
session_start();
$pdo = PdoGm::getPdoGm();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ma page de test</title>
   
  </head>
  <body>
  
    <img src="" alt="Mon image de test">
    <Center> Bienvenue sur l'application de Mobiles</Center>
    <p>
        <H2>Formulaire de connexion</H2>
    </p>
    <form method="post" action="scripts/controllers/Controleur_Connexion.php">
        <label for='login'>Login :</label>
        <input type='text' name='login'  placeholder="Ex : DRoche" id='login' required autofocus>
        <span id='loginManquant'></span><br>

        <label for='password'>Password :</label>
        <input type='text' name='password' id='password' required>
        <span id='passwordManquant'></span><br>

        <input type='submit' value='Valider' id='valider'>
        
      
    </form>
    <script type="text/javascript"> validation() </script>
  </body>
</html> 