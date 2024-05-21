<?php
//affiche le head.php avec include
require 'head.php';

//affiche le menu.php avec include
require 'header.php';
?>
<body class="CSS">
<main>
<!--debut de la section informations-->
        <section id="informations">
<div class="container">
    <div class="row">
        <div class="colonne-1">
<img src="img/PHOTO-profil-LINKEDIN.jpg" width="300px">
        </div>
        <div class="colonne-2">
<h1 class="titre-1">Romain Maillet</h1>
<h2 class="titre-2">Developpeur web <span>full stack</span></h2>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <h3 class="titre-3">coordonnées</h3>
            <p>126 route de vannes </br>
            44100 Nantes</br>
            0682646462</p>
            </div>
        <div class="col-md-8">
            <button class="bouton"><a href="mailto:grossemain@gmail.com">Contactez-moi</a></button>
        </div>
        </div>
    </div>
            </div>
        </section>
<!--debut de la section intro--> 
        <section id="intro">
            <div class="container">
                <p>En tant que <strong>webmaster</strong>, je me demarque dans l'art de créer, de maintenir et d'optimiser des sites web, alliant <strong>créativité et rigueur technique</strong> pour offrir la meilleure experience utilisateur. Ma maîtrise des <strong>techniques de référencement (SEO)</strong> me permet de positionner des sites en tête des résultats de recherche, contribuant ainsi à leur visibilité et à leur succès en ligne.</p>
            </div>
        </section>
<!--debut de la section formation-->
        <section id="formation">
            <div class="container">
                <div class="row">
                    <div class="colonne-1">
            <img src="img/formation.jpg" width="300px">
                    </div>
                    <div class="colonne-2">
            <h2 class="titre-2">Formation</h2>
            <ul>
                <li><span>2024</span> - Developpeur Web et Web Mobile</li>
                <li><span>2018</span> - Auto formation Html / CSS / JS</li>
                <li><span>2016</span> - Certification animateur e-commerce</li>
                <li><span>2008</span> - Bac pro communication graphique</li>
            </ul>
</div>
                </div>
            </div>
        </section>
<!--debut de la section experience-->
        <section id="experience">
            <div class="container">
                <div class="row">
                    <div class="colonne-1">
            <img src="img/experience.jpg" width="300px">
                    </div>
                    <div class="colonne-2">
            <h2 class="titre-2">Expériences</h2>
            <ul>
                <li><span>2024 / aujourd'hui</span> - Freelance SEO & Design</li>
                <li><span>2021 / 2024</span> - Consultant SEO</li>
                <li><span>2020 / 2021</span> - Webmaster SEO</li>
                <li><span>2018 / 2020</span> - Webmaster chef projet web SEO</li>
                <li><span>2016</span> - Assistant webmarketing SEO</li>
                <li><span>2014 / 2015</span> - Webmaster</li>
                <li><span>2006 / 2017</span> - Graphiste / Infographiste</li>
            </ul>
</div>
                </div>
            </div>
        </section>
<!--debut de la section competences-->
        <section id="competences">
                <div class="container">
                    <div class="row">
                        <div class="container sans-puces">
                            <div class="row">
                                <h2 class="titre-2">Compétences</h2>
                              <div class="col-md-4">
                                <h3 class="titre-3">WEB-MARKETING</h3>
                                <ul>
                                    <li><span>**</span> - SEA</li>
                                    <li><span>***</span> - ANALYTICS</li>
                                    <li><span>***</span> - SOCIAL MEDIA</li>
                                    <li><span>***</span> - REDACTION</li>
                                </ul>
                              </div>
                              <div class="col-md-4">
                                <h3 class="titre-3">SEO</h3>
                                <ul>
                                    <li><span>***</span> - WEB-PERF</li>
                                    <li><span>****</span> - AUDIT CRAWL</li>
                                    <li><span>****</span> - OPTI ON SITE</li>
                                    <li><span>****</span> - NETLINKING</li>
                                </ul>
                              </div>
                              <div class="col-md-4">
                                <h3 class="titre-3">WEB DEV & DESIGN</h3>
                                <ul>
                                    <li><span>****</span> - PRESTASHOP</li>
                                    <li><span>****</span> - WORDPRESS</li>
                                    <li><span>***</span> - HTML5 / CSS / JS / PHP / SQL</li>
                                    <li><span>****</span> - MOCK-UP / WIREFRAME</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                </div>
            </div>
        </section>
<!--debut de la section projets-->
        <section id="projets" class="sans-puces">
            <div class="container img-centre">
                <div class="row">
                    <h2 class="titre-2">Projets</h2>
                    <div class="colonne-1">
<img src="img/site-wordpress-grossemain.png" alt="site grossemain" width="300px">
<h3 class="titre-3">Grossemain</h3>
<a href="https://grossemain.fr">grossemain.fr</a>
                        <p>Site Branding pour promouvoir mes compétences de Webmaster</p>
                    <ul>
                        <li>CMS : Wordpress</li>
                        <li>HTML5 / CSS3 / Javascript / PHP / SQL</li>
                    </ul>
                    </div>
                    <div class="colonne-2">
                        <img src="img/site-prestashop-bluerabbink.png" alt="site bluerabbink" width="300px">
                        <h3 class="titre-3">Blue Rabb'Ink</h3>
<a href="https://bluerabbink.fr">bluerabbink.fr</a>
                        <p>Site ecommerce pour vendre mes oeuvres d'illustrateur</p>
                    <ul>
                        <li>CMS : Prestashop</li>
                        <li>HTML5 / CSS3 / Javascript / PHP / SQL / bootstrap</li>
                    </ul>
                    </div>
                </div>
            </div>
        </section>
<!--debut de la section contact-->
<?php
//affiche le contactForm.php avec include
include './formulaire/contactForm.php';
?>
    </main>
<?php
//affiche le footer.php avec include
require 'footer.php';
?>
</body>