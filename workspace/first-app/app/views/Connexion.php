<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ma page de test</title>
    <script src="/workspace/first-app/app/scripts/controllers/Connexion.js" type="text/javascript"></script>    
  </head>
  <body>
    <?php
  require 'Controleur_Connexion.php';
    ?>
    <img src="" alt="Mon image de test">
    <Center> Bienvenue sur l'application de Mobiles</Center>
    <p>
        <H2>Formulaire de connexion</H2>
    </p>
    <form method="post" action="Controleur_Connexion.php">
        <label for='login'>Login :</label>
        <input type='text' name='login'  placeholder="Ex : DRoche" id='login' required autofocus>
        <span id='loginManquant'></span><br>

        <label for='password'>Password :</label>
        <input type='text' name='password' id='password' required>
        <span id='passwordManquant'></span><br>

        <input type='submit' value='Valider' id='valider'>
        
       <script>
           var formValid = document.getElementById('valider');
           
           var login = document.getElementById('login');
           var loginManquant = document.getElementById('loginManquant');
           
           var password = document.getElementById('password');
           var passwordManquant = document.getElementById('passwordManquant');
            
           formValid.addEventListener('click', validation); 
    
       </script> 
    </form>
    <script type="text/javascript"> validation() </script>
  </body>
</html> 