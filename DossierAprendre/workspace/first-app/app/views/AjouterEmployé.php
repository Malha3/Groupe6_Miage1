
<body>
	<?php
  require_once ('C:\xampp\htdocs\workspace\first-app\app\views\MenuGestionnaire.php');
       
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
                    <form action="#" method="post" class="akame-contact-form border-0 p-0">
                        
	
						<header class="card-header">
							<meta charset="UTF-8">
							<div><a href="C:\xampp\htdocs\workspace\first-app\app\views\Accueil_G.php" class="float-right btn btn-outline-warning mt-1">Annuler</a></div>
							<h4 class="card-title mt-2">Ajouter Employé</h4>
							
						</header>
                            
						<article class="card-body">

<form method="post" action="/workspace/first-app/app/scripts/controllers/Controleur_AjoutEmploye.php">

	<div class="form-row">
		<div class="col form-group">
		
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
