<?php
include_once ('C:\xampp\htdocs\workspace\first-app\app\models\class_PDO.php');
        
if(PdoGm::operateur_user($_SESSION['login'])==true){

         require_once ('C:\xampp\htdocs\workspace\first-app\app\views\MenuOpérateur.php');

}
else
         if(PdoGm::gestionnaire_user($_SESSION['login'])==true){

                 require_once ('C:\xampp\htdocs\workspace\first-app\app\views\MenuGestionnaire.php');
       
         }
        else
                if(PdoGm::employe_user($_SESSION['login'])==true){

                    require_once ('C:\xampp\htdocs\workspace\first-app\app\views\MenuEmploye.php');
                 }

?>