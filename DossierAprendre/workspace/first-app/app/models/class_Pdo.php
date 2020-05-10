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


public function proposition_mobile()
{
	try
	{		// On se connecte à MySQL
		$bdd = new PDO('mysql:host=localhost;dbname=gmobile;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
		// En cas d'erreur, on affiche un message et on arrête tout
			die('Erreur : '.$e->getMessage());
	}
	
	//  Récupération de l'utilisateur et de son pass hashé
	$req = $bdd->query('SELECT id_modele,nom FROM modele_mobile');
$tableau;
$i=0;	
while($donnees=$req->fetch()){
?>	<?php echo	$tableau[$i]=$donnees['nom'];

	}
	

}

public function ajout_Employe($id,$nom,$prenom,$mail, $poste, $idEntreprise,$login,$mdp,$forfait,$mobile){
	
	$existe=true;
	
	try {
		// se connecter à mysql
		$bdd = new PDO('mysql:host=localhost;dbname=gmobile;charset=utf8', 'root', '');
	} catch (Exception $e) {
		  	// En cas d'erreur, on affiche un message et on arrête tout
			die('Erreur : '.$e->getMessage());
	}
		
		$req = $bdd->prepare('SELECT login FROM employe WHERE login = :login');
		
		$req->execute(array(
			'login' => $login));
			
		$resultat = $req->fetch();
		// Comparaison du pass envoyé via le formulaire avec la base
		
		if ($resultat == false || $resultat == 0 ||$resultat == null)
		{
			$existe = false;	

		
			$requete = $bdd->prepare('INSERT INTO employe(nom, mail, login, mdp, poste, idEntreprise) VALUES(:nom,:mail,:login, :mdp, :poste, :idEntreprise)');
			// On lie les variables définie au-dessus au paramètres de la requête préparée
			$requete->bindValue(':nom', $nom, PDO::PARAM_STR); 
			$requete->bindValue(':mail', $mail, PDO::PARAM_STR);
			$requete->bindValue(':login', $login, PDO::PARAM_STR);
			$requete->bindValue(':mdp', $mdp, PDO::PARAM_STR); 
			$requete->bindValue(':poste', $poste, PDO::PARAM_STR);
			$requete->bindValue(':idEntreprise', $idEntreprise, PDO::PARAM_STR);
		
			//On exécute la requête
			$requete->execute();
		echo 'réussi';
		}else{
			echo'echec';
		}

		return $existe;
}	
	
	

public function idGestionnaire($login){

	$conn = mysqli_connect('localhost','root', '','gmobile');
	$sql = "SELECT * FROM gestionnaire";
		$id=null;
	$result = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_assoc($result)){
		if($row['login']==$login){
		 $id = $row['idGestionnaire'];	
		}
		//component($row['nom'], $row['prix'], $row['image'], $row['id_modele']);
	}
		return $id;
	}

	public function ajout_Entreprise($nom,$nomDirecteur,$adresse){

		$existe=false;
	
		try {
			// se connecter à mysql
			$bdd = new PDO('mysql:host=localhost;dbname=gmobile;charset=utf8', 'root', '');
		} catch (Exception $e) {
				  // En cas d'erreur, on affiche un message et on arrête tout
				die('Erreur : '.$e->getMessage());
		}
			
			$req = $bdd->prepare('SELECT nom FROM entreprise WHERE nom = :nom');
			
			$req->execute(array(
				'nom' => $nom));
				
			$resultat = $req->fetch();
			// Comparaison du pass envoyé via le formulaire avec la base
			
			if ($resultat == false || $resultat == 0 ||$resultat == null)
			{ 
				$existe = true;	
	
			
				$requete = $bdd->prepare('INSERT INTO entreprise(nom, nom_Directeur, adresse) VALUES(:nom, :nom_Directeur, :adresse)');
				// On lie les variables définie au-dessus au paramètres de la requête préparée
				$requete->bindValue(':nom', $nom, PDO::PARAM_STR); 
				$requete->bindValue(':nom_Directeur', $nomDirecteur, PDO::PARAM_STR);
				$requete->bindValue(':adresse', $adresse, PDO::PARAM_STR);
	
			
				//On exécute la requête
				$requete->execute();
			echo 'réussi';
			}else{
				echo'echec';
			}
	
			return $existe;		
	}

	public function ajouter_Mobile($quantite,$idMobile,$idGestionnaire){
		try {
			// se connecter à mysql
			$bdd = new PDO('mysql:host=localhost;dbname=gmobile;charset=utf8', 'root', '');
		} catch (Exception $e) {
				  // En cas d'erreur, on affiche un message et on arrête tout
				die('Erreur : '.$e->getMessage());
		}
		$conn = mysqli_connect('localhost','root', '','gmobile');
	$sql = "SELECT * FROM modele_mobile";
	$result = mysqli_query($conn, $sql);
	$prix = 0;
	$NoIdFacture = false;
	$idFacture = null;
	
	$dateCommande = date('m/Y'); 
	$prixFacture = null;
	
	while ($row = mysqli_fetch_assoc($result)){
		if($row['id_modele']==$idMobile){
		 $id = true;	
		 $prix = $row['prix'];
		}
	}
	$prixCommande = $prix * $quantite;
	if ($id){
		$i=0;
	
		
		while($i<$quantite){
			$etat=false;

			$requete = $bdd->prepare('INSERT INTO mobile(etat, id_modele, idEntreprise) VALUES(:etat, :id_modele, :idEntreprise)');
				// On lie les variables définie au-dessus au paramètres de la requête préparée
				$requete->bindValue(':etat', $etat, PDO::PARAM_STR); 
				$requete->bindValue(':id_modele', $idMobile, PDO::PARAM_STR);
				$requete->bindValue(':idEntreprise', $idGestionnaire, PDO::PARAM_STR);
	
				//On exécute la requête
				$requete->execute();

				$i=$i+1; //Boucle
			
				$NoIdFacture = false;
				$idFacture = null;
				$sql2 = "SELECT * FROM facture";
	$result2 = mysqli_query($conn, $sql2);
	while ($row2 = mysqli_fetch_assoc($result2)){
		if($row2['dateDebut']==$dateCommande){
			$idFacture = $row2['idFacture'];
			$NoIdFacture =true;
			$prixFacture= $prixCommande+$row2['prix'];			
		}

	}

	


}
	}	
	
	if ($NoIdFacture == false){
		$requete2 = $bdd->prepare('INSERT INTO facture(prix, dateDebut, idEntreprise) VALUES(:prix, :dateDebut, :idEntreprise)');
				// On lie les variables définie au-dessus au paramètres de la requête préparée
				$requete2->bindValue(':prix', $prixCommande, PDO::PARAM_STR); 
				$requete2->bindValue(':dateDebut', $dateCommande, PDO::PARAM_STR);
				$requete2->bindValue(':idEntreprise', $idGestionnaire, PDO::PARAM_STR);
	
				//On exécute la requête
				$requete2->execute();
				while ($row2 = mysqli_fetch_assoc($result2)){
					if($row2['dateDebut']==$dateCommande){
						$idFacture = $row2['idFacture'];
						$NoIdFacture =true;			
					}
			
				}			
	}
	else{



	}

		$requeteCo = $bdd->prepare('INSERT INTO commande(quantite, prixCommande, dateCommande,idGestionnaire,idEntreprise,idFacture) VALUES(:quantite, :prixCommande, :dateCommande, :idGestionnaire, :idEntreprise, :idFacture)');
	// On lie les variables définie au-dessus au paramètres de la requête préparée
	$requeteCo->bindValue(':quantite', $quantite, PDO::PARAM_STR); 
	$requeteCo->bindValue(':prixCommande', $prixCommande, PDO::PARAM_STR);
	$requeteCo->bindValue(':dateCommande', $dateCommande, PDO::PARAM_STR);
	$requeteCo->bindValue(':idGestionnaire', $idGestionnaire, PDO::PARAM_STR); 
	$requeteCo->bindValue(':idEntreprise', $idGestionnaire, PDO::PARAM_STR);
	$requeteCo->bindValue(':idFacture', $idFacture, PDO::PARAM_STR);

	//On exécute la requête
	$requeteCo->execute();


		}


	}


?>