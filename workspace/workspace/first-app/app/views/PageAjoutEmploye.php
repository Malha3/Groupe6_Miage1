<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	

    <!-- Title -->
	<title>G-Mobile - Mobiles App HTML Template</title>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
	<link rel="stylesheet" href="/workspace/first-app/app/styles/style.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>

<!------ Include the above in your HEAD tag ---------->
<body>
	<?php
  require_once ('C:\xampp\htdocs\workspace\first-app\app\views\MenuGestionnaire.php');
       
?>
</body>
</html>

<div class="container">

<hr>


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	<meta charset="UTF-8">
	<a href="/workspace/first-app/app/views/Accueil_G.php" class="float-right btn btn-outline-warning mt-1">Annuler</a>
	<h4 class="card-title mt-2">Ajouter Employé</h4>
</header>
<article class="card-body">

<form method="post" action="/workspace/first-app/app/scripts/controllers/Controleur_AjoutEmploye.php">

	<div class="form-row">
		<div class="col form-group">
			<label>Prénom employé </label>   
		  	<input type="text" name="prenom" class="form-control" placeholder="">
		</div> <!-- form-group end.// -->
		 <div class="col form-group">
			<label>Nom employé</label>
		  	<input type="text" name="nom" class="form-control" placeholder=" ">
		</div> <!-- form-group end.// -->
	</div> <!-- form-row end.// -->
	<div class="form-group">
		<label>Email</label>
		<input type="email" name="mail"class="form-control" placeholder="">
		<small class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div> <!-- form-group end.// -->
	<div class="form-group">
		<label>Poste :</label>
		<input type="text" name="poste"class="form-control" placeholder="">
		<small class="form-text text-muted">We'll never share your phone number with anyone else.</small>
	</div>
		<div class="form-group">
			<label>Créer Login </label>
			<input class="form-control" name="login" type="text">
		</div> <!-- form-group end.// -->  
	<div class="form-group">
		<label>Créer Mot de passe</label>
	    <input class="form-control" name="mdp" type="text">
	</div> <!-- form-group end.// -->  
    <div class="form-group">
	<!--	<button type="submit" class="btn btn-primary btn-block" name="insert"> Register  </button>-->
		<p><button class="btn btn-primary btn-block" type="submit" value='Valider' id='valider' name='insert'>Ajouter un Employe </button>
			
    </div> <!-- form-group// -->      
    <small class="text-muted">En cliquant sur Ajouter Employé,  Vous ajoutez  employé à la base</small>                                          
</form>
	</article> <!-- card-body end .// -->

	
