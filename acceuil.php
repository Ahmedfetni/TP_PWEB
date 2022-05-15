<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Find A House dz</title>
    
        <link rel="stylesheet" href="style/style.css" />
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
                <li class="main-nav-element"><a href="Tous_les_annonces.php">Tous les Annonces</a></li>
                <li class="main-nav-element"><a href="mes_annonces.php">Mais Annonces</a></li>
                <li class="main-nav-element"><a href="contacter_nous.php">Contacter nous</a></li>
                <button class="button" id="connexion" onclick="location.href='ajouter_une_annonce.php'" >Ajouter une Annonce</button>
                <button class="button" id="connexion" onclick="location.href='ajouter_une_annonce.php'" >Deconexion</button>
            </ul>
        </nav>
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
        <footer>
            <div class="flex-container">
                <div class="footer-about">
                    <h2>About Stated</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
                </div>
    
                <div class="footer-quick-links">
                    <h2>Quick Links</h2>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Contact Us</a></li>
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
        <script src="https://kit.fontawesome.com/40440840ce.js" crossorigin="anonymous"></script>
    </body>
</html>
