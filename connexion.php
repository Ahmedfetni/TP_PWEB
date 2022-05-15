<?php
    include "config.php";

    try{
        $conn = OpenCon();
    
    }catch(Exception $e){
        echo 'Message : '.$e->getMessage();
    }
    if (isset($_SESSION['username'])) {
        header("Location: index.html");
    }
    
    if(isset($_POST['submit'])){
        $email_par_utilisateur = $_POST["email"];
        $mot_de_passe_par_utilisateur= md5($_POST['password']);
        $sql = "SELECT id, username, password FROM users WHERE email = '$email_par_utilisateur'";
        $result = mysqli_query($conn, $sql);
        if($result->num_rows == 1){
            $data = mysqli_fetch_assoc($result);
            if($data['password'] == $mot_de_passe_par_utilisateur){
                $id = $data['id'];
                $username = $data['username'];

                session_start();
                            
                //sayvgarder les infotmations de l'utilisateurs
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $id;
                $_SESSION["username"] = $username;
                $_SESSION['email']= $email_par_utilisateur; 

                header("Location: welcome.php");
            } 
        
        }else{    
            echo "<script>alert('the user email exist');</script>";
        }    
    }

?>

<html lang="fr">
    <head>
        <title>Find A House dz</title>
        
        <link rel="stylesheet" href="style/connexion.css" />
        <link rel="shortcut icon" href="images/logo.png" />
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
                <li class="main-nav-element"><a href="contacter_nous.html">Contacter nous</a></li>
                <button class="button" onclick="location.href='inscrire.php'" >Creer un Compte</button>
            </ul>
        </nav>
        

    <!-- The Modal (contains the Sign Up form) -->
    <section id="connecter">
        <div class="sign-in-container">
            <!--<?php
            if(!empty($server_side_form_erreur)) 
                echo
                    "<p class=\"erreur afficher-erreur\">".$server_side_form_erreur."</p>";
            ?>-->
            <h1>Connexions</h1>
            
            <form class="modal-content" method="POST" action="" id="connexion">

                <label for="email"><b>Email</b></label>
                <input class='text-field email-text-input' type="email" placeholder="Votre Email" name="email" value="<?php echo $email; ?>" >

                <p class="email-erreur erreur"></p>
                
                <label for="password"><b>Mot de Passe</b></label>
                <input class='text-field password-text-input' type="password" placeholder="votre mot de passe" name="password" value="<?php echo $_POST['password']; ?>" >

               <p class="password-erreur erreur"></p>


                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Annuler</button>
                    <button id="submitConnnexion"type="submit" name="submit" class="connexionButton">Connexion</button>
                </div>
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
    <script src="js/connexion.js"></script>
    <script src="https://kit.fontawesome.com/40440840ce.js" crossorigin="anonymous"></script>   
</body>
</html>