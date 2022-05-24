<?php
    session_start();
    session_start();
    if (isset($_SESSION['username']) && $_SESSION['loggedin'] ){
        header("Location: acceuil.php");
    }   
?>
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Find A House dz</title>
        
        <link rel="stylesheet" href="style/style.css" />
        <link rel="shortcut icon" href="./images/logo.png" />
    </head>
    <body>
        <!-- La barre de navigation pour un utilsateur -->
        <?php include_once('nav_bar_visiteur.php');?>
        <header>
            <div class="header-container">
                <h1>Find A Home dz</h1>
                <p>
                    Ce site est le projet du tp pour le module Programmation web cree par <br> FETNI Ahmed, Boradjah Maissa, Badri Ahmed Rami <br>
                    Les langagues utilises sont: html + css et javaScript pour le front-end et php dans le back-end "partie serveur" et my sql pour la base de données<br>
                    Les dependances sont php-msqli et font awsome<br> 
                    on a utilisé xampp sur Linux<br>
                    <bold>C'est pas notre pfe et c'est ce n'a auccune notre projet de fin d'étude "Ahmed et Maissa travaille sur une application mobile et Rami travaille sur application web avec ionic et flask"  </bold>  
                </p>
                <h2> Les fonctionalites du site web:</h2>
                <ul>
                    <li>Voir tous les anonnces en tanque visiteur et envoyer un message qui va etre sauvgarder sur la base de donnees</li>
                    <li>Crée un compte </li>
                    <li>Connecter</li>
                    <li>Ajouter une annonce si l'utilisateur est inscrit et connecter</li>
                    <li>Voir ses propres annonces</li>
                    <li>Supprimer ses propres annonces</li>
                </ul>
                <p>
                    On a implementer une validation des forms avec javaScript si l'utilisateur oublie de remplire un champ dans le form <br> un Erreur s'affiche <br>
                    et aussi en cas d'erruer du cote serveur un message d'erreur s'affichera dans la page<br>
                    en plus on a implementer une redirection si l'utilisateur essaye d'acceder un page sans autorisation<br>
                    les mots de passes sont sauvgarder sous forme du hash md5
                </p>
            </div>
        </header>
        <?php include_once('footer.php')?>
        <!-- Le footer du page  -->

        <!--La Partie JS-->
        <script>
             /*Ajouter un la functionalite du button type*/
             let typeBtn = document.querySelector('.type-btn');
             let listType = document.querySelector('.list-type');
             let regionBtn = document.querySelector('.region-btn');
             let listRegion = document.querySelector('.list-region');
             typeBtn.addEventListener("click",()=>{
                    listType.classList.toggle('new-type-list')
             });
             regionBtn.addEventListener("click",()=>{
                 listRegion.classList.toggle('new-region-list')
             });

        </script>
        pt>
    </body>
</html>
