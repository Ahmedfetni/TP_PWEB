<?php 

    include 'config.php';
    
    //error_reporting(0);

    session_start();
    try{
        $conn = OpenCon();
    
    }catch(Exception $e){
        echo 'Message : '.$e->getMessage();
    }
    if (isset($_SESSION['username'])) {
        header("Location: index.html");
    }
    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $body = $_POST['body'];

        $sql = "INSERT INTO feedbacks (name, email, body)
                        VALUES ('$name', '$email', '$body')";
     
        $result = mysqli_query($conn, $sql);

        if($result){
            $erreur_serverur = false ; //pas d'erreur 
            $_POST['name']="";
            $_POST['email']="";
            $_POST['body']="";

        }else{
         $erreur_serverur = true;
        }

    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Find A House dz</title>
    
        <link rel="stylesheet" href="style/contacter_style.css" />
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
                <!-- comment 2! delete -->
                <li class="main-nav-element"><a href="#About">à Propos</a></li>
                <li class="main-nav-element"><a href="contacter_nous.html">Contacter nous</a></li>
                <button class="button" onclick="location.href='inscrire.php'">Creer un Compte</button>
                <button class="button" id="connexion" onclick="location.href='connexion.html'" >Connexion</button>
            </ul>
        </nav>
        <section id="contacter-nous">
                <div class="main-section">

                <!--Message  a afficher-->
                <?php
                if(isset($erreur_serverur) && !$erreur_serverur){
                    echo "<p class=\"succes\">Votre message est bien enregistrer</p>";
                }else if(isset($erreur_serverur)){
                    echo "<p class =\"erreur afficher-erreur\">votre Feedback / Message non enregistré a cause d'une erreur</p>";
                }
                
                ?>

                <!--Le Logo -->
                <img src="images/logo.png" class="round-logo" alt="">
                <h2>Feedback</h2>
                <!--La forum de contact -->
                
                    <form method="POST" class="contact-form" id="contact" action="">

                        <label for="name" class="form-label" name="name"><b>Nom</b></label>
                        <input type="text" class="ident nom-text-input" id="name" name="name" placeholder="votre nom">
                        
                        <p class="nom-erreur erreur"></p>

                        <label for="email" class="form-label"><b>Email</b></label>
                        <input type="email" class="ident email-text-input" id="email" name="email" placeholder="Votre email">
                        
                        <p class="email-erreur erreur"></p>
                        
                        <label for="body" name="body" id="body" class="form-label"><b> votre Message</b></label>
                        <textarea class="body-message" id="body" name="body" placeholder="Message/Feedback"></textarea>
                        
                        <p class="body-erreur erreur"></p>

                        <button id="the-form-submit" type="submit" name="submit" >Envoyer</button>
                    
                    </form>

                    
                </div> 
        </section>
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
        <script src="js/contacter_nous.js"></script>
        <script src="https://kit.fontawesome.com/40440840ce.js" crossorigin="anonymous"></script>
    </body>
</html>
