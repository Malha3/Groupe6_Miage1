<?php
include_once ('C:\xampp\htdocs\workspace\first-app\app\models\class_PDO.php');

$compteur =0;
//PdoGm::$pdo = new PDO(PdoGm::$serveur.';'.PdoGm::$bdd, PdoGm::$user, PdoGm::$mdp); 
if (isset($_POST['login']) && isset($_POST['password'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];

// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
    if (PdoGm::verification_Utilisateur($login,$password)==true) {
    // dans ce cas, tout est ok, on peut démarrer notre session

        // on la démarre :)
      session_start ();
    // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['password'] = $_POST['password'];

    // on redirige notre visiteur vers une page de notre section membre
        require_once ('C:\xampp\htdocs\workspace\first-app\app\views\Accueil.php');
    }
    else
        if(PdoGm::verification_Utilisateur($login,$password)==false){
        // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
               echo '<body onLoad="alert(\'Membre non reconnu...\')">';
        // puis on le redirige vers la page d'accueil
            require_once ('C:\xampp\htdocs\workspace\first-app\app\views\Connexion.php');
        }
    }

?>