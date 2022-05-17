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
            <div>
                <h1>Find A Home dz</h1>
                <p>
                    Ce site est un  
                </p>
            </div>
        </header>
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
