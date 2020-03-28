<?php
if(!isset($_SESSION['operateur'])){

require_once ('C:\xampp\htdocs\workspace\first-app\app\views\MenuOpérateur.php');

}
else
    if(!isset($_SESSION['gestionnaire'])){

        require_once ('C:\xampp\htdocs\workspace\first-app\app\views\MenuGestionnaire.php');

    }
    else
        if(!isset($_SESSION['employe'])){

            require_once ('C:\xampp\htdocs\workspace\first-app\app\views\MenuEmploye.php');

        }

?>