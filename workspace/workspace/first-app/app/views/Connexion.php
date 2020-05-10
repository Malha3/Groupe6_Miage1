<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Connexion-G-mobile</title>

	<link rel="shortcut icon" href="/workspace/first-app/app/assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="/workspace/first-app/app/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="/workspace/first-app/app/assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="/workspace/first-app/app/assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title"> G-Mobile Connexion</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Se connecter à votre compte</h3>
							<p class="text-center text-muted">Pour vous connecter, veuillez saisir votre identifiant et mot de passe.. </p>
							<hr>
							
							<form  method="post" action="/workspace/first-app/app/scripts/controllers/Controleur_Connexion.php">
								<div class="top-margin">
									<label>Login <span class="text-danger">*</span></label>
									<input type="text" placeholder="Ex : PDurant ou 01234561" id='login' name='login' class="form-control" required autofocus>
								</div>
								<div class="top-margin">
									<label>Mot de passe <span class="text-danger">*</span></label>
									<input type="password" class="form-control"  name='password' id='password' required>
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										<b><a href="">Mot de passe oublié?</a></b>
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit" value='Valider' id='valider'>Sign in</button>
									</div>
                </div>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	

	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>+33-145215485<br>
								<a href="mailto:#">info.g-mobile@gmail.com</a><br>
								<br>
								23 Boulevard de France, Paris, 75008
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow me</h3>
						<div class="widget-body">
							<p class="follow-me-icons clearfix">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href=""><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Text widget</h3>
						<div class="widget-body">
							<p>Pour vous connecter, veuillez saisir votre identifiant et votre mot de passe..</p>
						</div>
					</div>
					

				</div> <!-- /row of widgets -->
			</div>
			
		</div>
		

		
	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="/workspace/first-app/app/assets/js/headroom.min.js"></script>
	<script src="/workspace/first-app/app/assets/js/jQuery.headroom.min.js"></script>
	<script src="/workspace/first-app/app/assets/js/template.js"></script>
</body>
</html>
