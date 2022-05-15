<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Find A House dz</title>
    
        <link rel="stylesheet" href="style/ajouter_une_annonce.css" />
        <link rel="shortcut icon" href="./images/logo.png" />
    </head>
    <body>
        <nav class="main-nav">
            <a class="nav-logo" href="index.html">
                <img src="images/logo_transparent.png" alt="" class="main-nav-image" />
            </a>
            <ul class="main-nav-elements">
                <li class="main-nav-element">
                    <a href="index.html">Accueil</a>
                </li>
                <li class="main-nav-element"><a href="#About">à Propos</a></li>
                <li class="main-nav-element"><a href="contacter_nous.php">Contacter nous</a></li>
                <button class="button" onclick="location.href='inscrire.php'" >Creer un Compte</button>
                <button class="button" id="connexion" onclick="location.href='connexion.php'" >Connexion</button>
            </ul>
        </nav>
        <section id="inscrire">
            <div class="ajout-container">
                <!--<?php
                if(!empty($server_side_form_erreur)) 
                    echo
                        "<p class=\"erreur afficher-erreur\">".$server_side_form_erreur."</p>";
                ?>-->
                <h1>Ajouter une annonces </h1>

                <form class="modal-content" method="POST" action="" id="annonce">

                    <label for="titre"><b>Titre</b><sup>*</sup> </label>
                    <input class='text-field titre-text-input' type="text" placeholder="titre" name="titre"/>
                    <p class="titre-erreur erreur"></p>

                    <label for="body" class="form-label"><b>Discription</b><sup>*</sup></label>
                    <textarea class="body-message" id="body" name="body" placeholder="discription"></textarea>
                    <p class="body-erreur erreur"></p>
                    
                    <!-- Pour choisir un type-->
                    <div id="type-annonce" class="form-group">
                        <label for="type"><b>Type</b></label>
                        <label>
                            <input type="radio" name="type" value="A" id="appartement"/>Appartement
                        </label>
                        <label>
                            <input type="radio" name="type" value="M" id="maison"/>Maison
                        </label>
                        <label>
                            <input type="radio" name="type" value="L" id="local-comercial"/>local commercial
                        </label>
                    </div>
                    <p class="type-erreur erreur"></p>

                    <label for="prix"><b>Prix</b></label>document.forms['annonce'
                    <input class="text-field titre-text-input" type="text" name="prix" in="1"">
                    <p class="prix-erreur erreur"></p>
                    <!-- Pour l'adresse et la wilaya-->
                    <div id ="lieu" class="form-group">
                        <label for="adresse"><b>Adresse</b></label>
                        <input class="text-field titre-text-input" name="adresse" id="adresse" type="text"/>
                        
                        <label for="wilaya"><b>Wilaya</b></label>
                        <input class="text-field titre-text-input" name="wilaya" id="wilaya" type="text"/>
                    </div>
                    <p class="lieu-erreur erreur"></p>

                    <label for="nbr-peice"><b>Nombre des pieces</b></label>
                    <input class="text-field titre-text-input" name="nbrpiece" id="nbrpiece" type="number"/>
                    <p class="nbrpiece-erreur erreur"></p>

                    <label for="tlp"><b>Numero de telephone</b></label>
                    <input class="text-field titre-text-input" name="tlp" id="tlp" type="text" >
                    <p class="tlp-erreur erreur"></p>

                    <button id="envoyer-btn" type="submit" name="submit">Envoyer</button>

                </form>
            </div>
        <section>
            <footer>
            <div class="flex-container">
                <div class="footer-about" id="a-propos">
                    <h2>About Stated</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
                </div>
    
                <div class="footer-quick-links">
                    <h2>Quick Links</h2>
                    <ul>
                        <li><a href="#">A propos de nous</a></li>
                        <li><a href="#">Offres</a></li>
                        <li><a href="#">Contacter nous</a></li>
                    </ul>
                </div>
    
                <div class="footer-suiver">
                    
                    <h2>Follow Us</h2>
                    <ul>
                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                    </ul>
                </div>
            </div>
    
            <small>
                Copyright &copy; 2019 All rights reserved | This template is made with <span class="fa fa-heart"></span> by <a href="https://colorlib.com">Colorlib</a>
            </small>
        </footer>
        <script src="js/ajouter_une_annonce.js"></script>
        <script src="https://kit.fontawesome.com/40440840ce.js" crossorigin="anonymous"></script>   
    </body>
    </html>