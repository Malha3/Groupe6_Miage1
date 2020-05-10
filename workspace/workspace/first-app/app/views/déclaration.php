<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>G-Mobile - Mobiles App HTML Template</title>

   

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/workspace/first-app/app/styles/style.css">


</head>
<Body>
<?php
  require_once ('C:\xampp\htdocs\workspace\first-app\app\views\MenuGestionnaire.php');
       
?>



 

    <!-- Contact Area Start -->
    <section class="akame-contact-area bg-gray section-padding-80">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Faire sa déclaration</h2>
                        <p>Votre déclaration va être traitée dans les brefs délais.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Form -->
                    <form action="#" method="post" class="akame-contact-form border-0 p-0">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="message-firstname" class="form-control mb-30" placeholder="Prénom">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="message-name" class="form-control mb-30" placeholder="Nom">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="message-email" class="form-control mb-30" placeholder="Email">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="entreprise" class="form-control mb-30" placeholder="Nom Entreprise">
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="form-control mb-30" placeholder="Motif de déclaration..."></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn akame-btn btn-3 mt-15 active">Envoyer déclaration</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->

   
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