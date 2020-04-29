<?php



function getConnexion()
{

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    
    //On essaie de se connecter
    try{
        $conn = new PDO("mysql:host=$servername;dbname=gmobile", $username, $password);
        //On définit le mode d'erreur de PDO sur Exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // echo 'Connexion réussie';
    }
    
    /*On capture les exceptions si une exception est lancée et on affiche
     *les informations relatives à celle-ci*/
    catch(PDOException $e){
      echo "Erreur : " . $e->getMessage();
    }
    return $conn;
}

function verification_Utilisateur($login,$password)
{

$conn = getConnexion();
$present = false;
$reqOperateur = $conn->query('SELECT login,mdp FROM opérateur');

while($ligne=$reqOperateur->fetch_assoc()) {
    if($ligne['login']==$login && $login['mdp']==$password){
        $present=true;
    }

}

if($present=false){
    $reqGestionnaire = $conn->query('SELECT login, mdp FROM gestionnaire');
    
    while($ligne=$reqGestionnaire->fetch_assoc()) {
        if($ligne['login']==$login && $login['mdp']==$password){
            $present=true;
        }
    }
}
else{
    if($present =false){
        $reqEmploye = $conn->query('SELECT login, mdp FROM employe');
        while($ligne=$reqEmploye->fetch_assoc()) {
            if($ligne['login']==$login && $login['mdp']==$password){
                $present=true;
            }

        }
    }
}
$conn->close();

return $req;
}

function utilisateur($login,$mdp){



}

?>