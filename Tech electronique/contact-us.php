<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact Us</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="assets/css/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="/">Tech electronics</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="features.html">Produits</a></li>
                    <li class="nav-item"><a class="nav-link" href="pricing.html">tarifs</a></li>
                    <li class="nav-item"><a class="nav-link" href="about-us.html">à propos</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact&nbsp;</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Bienvenue dans notre service de contact</h2>
                    <p>Nous sommes ravis de vous offrir un moyen simple et efficace de nous joindre.</p>
                </div>
                <form action="contact-us.php" method="post">
                    <div class="mb-3"><label class="form-label" for="name">Nom</label><input class="form-control" type="text" id="name" name="nom1"></div>
                    <div class="mb-3"><label class="form-label" for="subject">Adresse</label><input class="form-control" type="text" id="subject" name="adresse1"></div>
                    <div class="mb-3"><label class="form-label" for="email">Email</label><input class="form-control" type="email" id="email" name="email1"></div>
                    <div class="mb-3"><label class="form-label" for="message">Sujet</label><textarea class="form-control" id="message" name="sujet1"></textarea></div>
                    <div class="mb-3"><button class="btn btn-primary" type="submit" name="valider">Envoyer</button></div>
                    <?php
                       $user="root";
                       $psw="root";
                       $conn="mysql:host=localhost;dbname=tech";
                       $db=new PDO($conn,$user,$psw);
                       if(isset($_POST['valider'])){
                           $M1=$_POST['nom1'];
                           $M2=$_POST['adresse1'];
                           $M3=$_POST['email1'];
                           $M4=$_POST['sujet1'];
                           $ajout=$db->prepare("insert into electronics values('$M1','$M2','$M3','$M4')");
                           if($ajout->execute()){
                               echo"<div class='border-primary bg-info'>Opération Términée avec succés !</div>";
                           }else{
                               echo"<div class='border-dark bg-danger'>erreur d ajout des données!";
                           }
                       }
                    ?>
                </form>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col"><label class="col-form-label text-white">Engagé envers l'excellence ,Tech Electronics vous présente les dernières innovations en matière d'informatique.de communication, d'audio et de photographie.</label></div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2024 Copyright Text</p>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/baguetteBox.min.js"></script>
    <script src="assets/js/vanilla-zoom.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>