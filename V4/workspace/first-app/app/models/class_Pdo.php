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

public function verification_Utilisateur($login,$password)
{
	$carotte = false;
	
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
	
	
	$reqEmpl = $bdd->prepare('SELECT idEmploye, mdp FROM employe WHERE login = :login AND mdp = :mdp');
	$reqEmpl->execute(array(
		'login' => $login,
		'mdp'=>$password));
		
	$resultatEmpl = $reqEmpl->fetch();
	
	
	
	$reqGest = $bdd->prepare('SELECT idGestionnaire, mdp FROM gestionnaire WHERE login = :login AND mdp = :mdp');
	$reqGest->execute(array(
		'login' => $login,
		'mdp'=>$password));
		
	$resultatGest = $reqGest->fetch();
	
	
	
	// Comparaison du pass envoyé via le formulaire avec la base

	if ($resultat)
	{	
		//session_start();
		$_SESSION['idOpérateur'] = $resultat['idOpérateur'];
		$_SESSION['operateur']= 0; // Permet de connaite le type de l'utilisateur : Opérateur, Gestionnaire,..
		//$_SESSION['login'] = $login;
		echo 'Vous êtes connecté entant quopérateur!';
		$carotte = true;
		//echo 'Mauvais identifiant ou mot de passe !';
	}
	else
		if ($resultatEmpl){
			
				//session_start();
			$_SESSION['idEmploye'] = $resultatEmpl['idEmploye'];
			$_SESSION['employe']=0; // Permet de connaite le type de l'utilisateur : Opérateur, Gestionnaire,..
			//$_SESSION['login'] = $login;
			echo 'Vous êtes connecté en tant quemployé!';
			$carotte = true;
			}
		else
			if($resultatGest){
				
						//session_start();
					$_SESSION['idGestionnaire'] = $resultatGest['idGestionnaire'];
	
					$_SESSION['gestionnaire']=1; // Permet de connaite le type de l'utilisateur : Opérateur, Gestionnaire,..
					//$_SESSION['login'] = $login;
					echo 'Vous êtes connecté en tant que gestionnaire!';
					$carotte = true;
			}	
			else{
				echo 'Mauvais identifiant ou mot de passe !';
			}
		
	return $carotte;
		}
	
			



public function operateur_user($login)
{
	$trouve=false;

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
	$req = $bdd->prepare('SELECT idOpérateur, mdp FROM opérateur WHERE login = :login');
	$req->execute(array(
		'login' => $login));
		
	$resultat = $req->fetch();


	// Comparaison du pass envoyé via le formulaire avec la base

	if ($resultat)
	{
		$trouve = true;
		//echo 'Mauvais identifiant ou mot de passe !';
	}
	return $trouve;
}
public function employe_user($login)
{
	$trouve=false;

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
	$req = $bdd->prepare('SELECT idEmploye, mdp FROM employe WHERE login = :login');
	$req->execute(array(
		'login' => $login));
		
	$resultat = $req->fetch();


	// Comparaison du pass envoyé via le formulaire avec la base

	if ($resultat)
	{
		$trouve = true;
		//echo 'Mauvais identifiant ou mot de passe !';
	}
	return $trouve;
}

public function gestionnaire_user($login)
{
	$trouve=false;

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
	$req = $bdd->prepare('SELECT idGestionnaire, mdp FROM gestionnaire WHERE login = :login');
	$req->execute(array(
		'login' => $login));
		
	$resultat = $req->fetch();


	// Comparaison du pass envoyé via le formulaire avec la base

	if ($resultat)
	{
		$trouve = true;
		//echo 'Mauvais identifiant ou mot de passe !';
	}
	return $trouve;
}

}
?>