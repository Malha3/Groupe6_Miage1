<!DOCTYPE html>
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



<!------ Include the above in your HEAD tag ---------->
<body>
	<?php
  require_once ('C:\xampp\htdocs\workspace\first-app\app\views\MenuOpérateur.php');
       
?>


<!--<header class="card-header">
	<div class="row justify-content-center">
<div class="card">
	<meta charset="UTF-8">
	<a href="/workspace/first-app/app/sviews/Accueil_G.php" class="float-right btn btn-outline-warning mt-1">Annuler</a>
	<h4 class="card-title mt-2">Ajouter Employé</h4>
</header>-->

    <!-- Contact Area Start -->
    <section class="akame-contact-area bg-gray section-padding-80">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <!-- Form -->
            
					<form method="post" action="/workspace/first-app/app/scripts/controllers/Controleur_Entreprise.php">
						<header class="card-header">
							<meta charset="UTF-8">
							<div><a href="/workspace/first-app/app/views/Accueil_Op.php" class="float-right btn btn-outline-warning mt-1">Annuler</a></div>
							<h4 class="card-title mt-2">Ajouter une société</h4>
							
						</header>
                            
									<article class="card-body">
								
	<div class="form-row">
		<div class="col form-group">
			<label>Nom de la société : </label>   
		  	<input type="text" name="nom" class="form-control" placeholder="">
		</div> <!-- form-group end.// -->
		 <div class="col form-group">
			<label>Nom et Prénom du Directeur :</label>
		  	<input type="text" name="nomDirecteur" class="form-control" placeholder=" ">
		</div> <!-- form-group end.// -->
	</div> <!-- form-row end.// -->
	<div class="form-group">
		<label>Adresse :</label>
		<input type="text" name="adresse"class="form-control" placeholder="">
		<small class="form-text text-muted">We'll never share your phone number with anyone else.</small>
	</div>
	</div> <!-- form-group end.// -->  
    <div class="form-group">
	<!--	<button type="submit" class="btn btn-primary btn-block" name="insert"> Register  </button>-->
		<p><button class="btn btn-primary btn-block" type="submit" value='Valider' id='valider' name='insert'>Ajouter une Entreprise </button>
			
    </div> <!-- form-group// -->      
    <small class="text-muted">En cliquant sur Ajouter Employé,  Vous ajoutez  employé à la base</small>                                          
</form>
	</article> <!-- card-body end .// -->
								</div>
							</form>
							</div>
						</div>
					</div>
				</section>

				</div>
					</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

   <!-- All JS Files -->
    <!-- jQuery -->
    <script src="/workspace/first-app/app/js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="/workspace/first-app/app/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="/workspace/first-app/app/js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="/workspace/first-app/app/js/akame.bundle.js"></script>
    <!-- Active -->
    <script src="/workspace/first-app/app/js/default-assets/active.js"></script>
</body>
</html>

<!--code mamadou-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">

<hr>

