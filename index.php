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
            <!--Search sections -->
            <div class="searchbar-container">
                <input class="searchbar" type="text" placeholder="recherche">
                <div class="type">
                    <button class="type-btn">Type</button>
                    <div class="list-type">
                        <button class="pick-type">Appartement</button>
                        <button class="pick-type">Villa</button>
                        <button class="pick-type">Garage</button>
                        <button class="pick-type">Bureau</button>
                    </div>
                </div>
                <div class="region">
                    <button class="region-btn">Regions</button>
                    <div class="list-region">
                        <button class="pick-region">Nord</button>
                        <button class="pick-region">Est</button>
                        <button class="pick-region">Ouest</button>
                        <button class="pick-region">Sud</button>
                    </div>
                </div>
            </div>
        </header>
        <!-- Le footer du page  -->
        <?php include_once('footer.php');?>
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
