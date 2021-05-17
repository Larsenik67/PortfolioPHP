<?php

require_once 'connect.php';
require_once 'form/indexForm.php';

?>

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>Mon portfolio</title>
  </head>
<body>
    <!--HEADER-->
    <header>
        <div id="site-header"></div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="mx-5 nav-link" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="mx-5 nav-link" href="portfolio.php">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="mx-5 nav-link" href="competences.php">Compétences</a>
                    </li>
                    <li class="nav-item">
                        <a class="mx-5 nav-link" href="login.php">Connexion<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="mx-5 nav-link" href="register.php">S'enregistrer<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="mx-5 nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="mx-5 nav-link " href="about.php">À propos</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--FIN HEADER-->
    <section id="portfolio-section" class="row">
        <div class="col-md-12 text-center">
            <h2 class="titre-section">Mes Réalisations</h2>
        </div>
        <div class="col-md-6 preview">
            <div class="portfolio-image">
                <img class="preview-img"  src="images/exemple-portfolio.jpg" alt="Exemple de projet pour le Portfolio">
                <div class="description-projet">
                    <p class="text-center font-weight-bold description-projet-titre">Exemple</p>
                    <p class="text-center description-projet-text">Ceci est un texte exemples pour expliquer le projet en quelques lignes</p>
                    <p class="text-center separateur">Technologies</p>
                    <p><span class="tag">HTML</span> <span class="tag">CSS</span></p>
                    <p class="text-center separateur">Liens</p>
                    <p><a class="visit-button" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><span class="fas fa-globe-europe mr-2"></span>Accéder au site</a></p>
                </div>
            </div>
        </div>
            <div class="col-md-6 preview">
            <div class="portfolio-image">
                <img class="preview-img"  src="images/exemple-portfolio.jpg" alt="Exemple de projet pour le Portfolio">
                <div class="description-projet">
                    <p class="text-center font-weight-bold description-projet-titre">Exemple</p>
                    <p class="text-center description-projet-text">Ceci est un texte exemples pour expliquer le projet en quelques lignes</p>
                    <p class="text-center separateur">Technologies</p>
                    <p><span class="tag">HTML</span> <span class="tag">CSS</span></p>
                    <p class="text-center separateur">Liens</p>
                    <p><a class="visit-button" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><span class="fas fa-globe-europe mr-2"></span>Accéder au site</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 preview">
            <div class="portfolio-image">
                <img class="preview-img"  src="images/exemple-portfolio.jpg" alt="Exemple de projet pour le Portfolio">
                <div class="description-projet">
                    <p class="text-center font-weight-bold description-projet-titre">Exemple</p>
                    <p class="text-center description-projet-text">Ceci est un texte exemples pour expliquer le projet en quelques lignes</p>
                    <p class="text-center separateur">Technologies</p>
                    <p><span class="tag">HTML</span> <span class="tag">CSS</span></p>
                    <p class="text-center separateur">Liens</p>
                    <p><a class="visit-button" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><span class="fas fa-globe-europe mr-2"></span>Accéder au site</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 preview">
            <div class="portfolio-image">
                <img class="preview-img"  src="images/exemple-portfolio.jpg" alt="Exemple de projet pour le Portfolio">
                <div class="description-projet">
                    <p class="text-center font-weight-bold description-projet-titre">Exemple</p>
                    <p class="text-center description-projet-text">Ceci est un texte exemples pour expliquer le projet en quelques lignes</p>
                    <p class="text-center separateur">Technologies</p>
                    <p><span class="tag">HTML</span> <span class="tag">CSS</span></p>
                    <p class="text-center separateur">Liens</p>
                    <p><a class="visit-button" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><span class="fas fa-globe-europe mr-2"></span>Accéder au site</a></p>
                </div>
            </div>
        </div>
    </section>
    <!--Debut Footer-->
    <footer id="colophon" class="site-footer">
        <div class="footer-basic">
        <ul class="list-inline">
            <li class="list-inline-item"><a href="index.php">Accueil</a></li>
            <li class="list-inline-item"><a href="portfolio.php">Portfolio</a></li>
            <li class="list-inline-item"><a href="competences.php">Compétences</a></li>
            <li class="list-inline-item"><a href="login.php">Connexion</a></li>
            <li class="list-inline-item"><a href="register.php">S'enregistrer</a></li>
            <li class="list-inline-item"><a href="contact.php">Contact</a></li>
            <li class="list-inline-item"><a href="about.php">A propos</a></li>
        </ul>
    </div>

    <div class="social-wrapper">
        <ul>
        <li>
            <a href="#" target="_blank">
            <img src="https://cdn3.iconfinder.com/data/icons/2018-social-media-logotypes/1000/2018_social_media_popular_app_logo_twitter-256.png" alt="Twitter Logo" class="twitter-icon"></a>
        </li>
        <li>
            <a href="#" target="_blank">
            <img src="https://cdn3.iconfinder.com/data/icons/2018-social-media-logotypes/1000/2018_social_media_popular_app_logo_instagram-512.png" alt="Instagram Logo" class="instagram-icon"></a>
        </li>
        <li>
            <a href="#" target="_blank">
            <img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Linkedin_unofficial_colored_svg-512.png" alt="Linkedin Logo" class="linkedin-icon"></a>
        </li>
        <li>
            <a href="#" target="_blank">
            <img src="http://www.iconarchive.com/download/i54037/danleech/simple/facebook.ico" alt="Facebook Logo" class="facebook-icon"></a>
        </li>
        <li>
            <a href="#" target="_blank">
            <img src="https://lh3.googleusercontent.com/j_RwVcM9d47aBDW5DS1VkdxUYCkDUCB6wZglv4x-9SmsxO0VaFs7Csh-FmKRCWz9r_Ef=w170" alt="Youtube Logo" class="youtube-icon"></a>
        </li>
        </ul>
    </div>

    <nav class="footer-nav">
    </nav>
    <p class="copyright">Copyright © 2021</p>
    </footer>
    <!--Fin footer-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>