<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">

<hr>


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	<meta charset="UTF-8">
	<a href="/workspace/first-app/app/views/Accueil_Op.php" class="float-right btn btn-outline-warning mt-1">Annuler</a>
	<h4 class="card-title mt-2">Ajouter Employé</h4>
</header>
<article class="card-body">
<form action="Controleur_AjoutEmploye.php" method="post">
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
		<input type="phone" name="poste"class="form-control" placeholder="">
		<small class="form-text text-muted">We'll never share your phone number with anyone else.</small>
	
		<div class="form-group">
			<label>Créer Login </label>
			<input class="form-control" type="text">
		</div> <!-- form-group end.// -->  
	<div class="form-group">
		<label>Créer Mot de passe</label>
	    <input class="form-control" type="password">
	</div> <!-- form-group end.// -->  
    <div class="form-group">
	<!--	<button type="submit" class="btn btn-primary btn-block" name="insert"> Register  </button>-->
		<p><input type="submit" class="btn btn-primary btn-block" name="insert" value="Ajouter employé"></p>
    </div> <!-- form-group// -->      
    <small class="text-muted">En cliquant sur Ajouter Employé,  Vous ajoutez  employé à la base</small>                                          

</article> <!-- card-body end .// -->
