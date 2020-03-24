<?php


class PdoGm{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=gmobile';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;	
		private static $monPdo;
		private static $monPdoGm=null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct(){
    	PdoGm::$monPdo = new PDO(PdoGm::$serveur.';'.PdoGm::$bdd, PdoGm::$user, PdoGm::$mdp); 
		PdoGm::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoGm::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 
 * Appel : $instancePdoGsb = PdoGsb::getPdoGsb();
 
 * @return l'unique objet de la classe PdoGsb
 */
	public  static function getPdoGm(){
		if(PdoGm::$monPdo==null){
			PdoGm::$monPdo= new PdoGm();
		}
		return PdoGm::$monPdo;  
    }



	public function getInfosVisiteur($login, $mdp){
		$req = "select visiteur.id as id, visiteur.nom as nom, visiteur.prenom as prenom from visiteur 
		where visiteur.login='$login' and visiteur.mdp='$mdp'";
		$rs = PdoGsb::$monPdo->query($req);
		$ligne = $rs->fetch();
		return $ligne;
	}
public function verification_Utilisateur($login,$password)
{
	
	try
	{
		// On se connecte à MySQL
		$bdd = new PDO('mysql:host=localhost;dbname=gmobile;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
		// En cas d'erreur, on affiche un message et on arrête tout
			die('Erreur : '.$e->getMessage());
	}
	
	
	//  Récupération de l'utilisateur et de son pass hashé
	$req = $bdd->prepare('SELECT idOpérateur, mdp FROM opérateur WHERE login = :login AND mdp = :mdp');
	$req->execute(array(
		'login' => $login,
		'mdp'=>$password));
		
	$resultat = $req->fetch();
	
	// Comparaison du pass envoyé via le formulaire avec la base

	if (!$resultat)
	{
		echo 'Mauvais identifiant ou mot de passe !';
	}
	else
	{
			session_start();
			$_SESSION['idOpérateur'] = $resultat['idOpérateur'];
			$_SESSION['login'] = $login;
			echo 'Vous êtes connecté !';
		}
		
}





/*
$present = false;
//$reqOperateur = $conn->query('SELECT login,mdp FROM opérateur');
$conn=PdoGm::$monPdo = new PDO(PdoGm::$serveur.';'.PdoGm::$bdd, PdoGm::$user, PdoGm::$mdp); 

$rsOperateur = $conn->query('SELECT login,mdp FROM opérateur');

while($ligne=$rsOperateur->fetch_All()) {
    
    if($ligne['login']==$login && $ligne['mdp']==$password){
        $present=true;
    }

}

if($present=false){
   // $reqGestionnaire = $conn->query('SELECT login, mdp FROM gestionnaire');

    $rsGestionnaire = $conn->query('SELECT login, mdp FROM gestionnaire');

    
    while($ligne=$rsGestionnaire->fetch()) {
        if($ligne['login']==$login && $login['mdp']==$password){
            $present=true;
        }
    }
}
else{
    if($present =false){
        //$reqEmploye = $conn->query('SELECT login, mdp FROM employe');

        $rsEmploye = $conn->query('SELECT login, mdp FROM employe');

    
        while($ligne=$rsEmploye->fetch()) {
            if($ligne['login']==$login && $login['mdp']==$password){
                $present=true;
            }

        }
    }
}
//$conn->close();

return $present;
}*/
}

?>