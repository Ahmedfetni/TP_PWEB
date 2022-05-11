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
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);
    
	if ($password == $cpassword) {
       
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('votre compte a été créé avec succès.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Un erreur pendant la creeation de votre compte')</script>";
			}
		} else {
			echo "<script>alert('Cette email deja exist')</script>";
		}
		
	} else {
		echo "<script>
            alert('mot de passe n'est pas le meme ')
            
            
        </script>";
	}
}

?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Find A House dz</title>
        
        <link rel="stylesheet" href="style/inscrire.css" />
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
    <section id="inscrire">
        <div class="sign-up-container">
            <h1>S'inscrire</h1>
            <p>Introduire vos information pour cree un compte</p> 
            <form class="modal-content" method="POST" action="" id="inscription">
                <label for="email"><b>Nom et Prénom</b></label>
                <input class='text-field' type="text" placeholder="Nom et prénom" name="username" value="<?php echo $username; ?>" >
                
                <label for="email"><b>Adresse Email</b></label>
                <input class='text-field email-text-input' type="email" placeholder="Votre Email" name="email" value="<?php echo $email; ?>" >

                <p class="email-erreur erreur"></p>
                
                <label for="password"><b>Mot de Passe</b></label>
                <input class='text-field' type="password" placeholder="votre mot de passe" name="password" value="<?php echo $_POST['password']; ?>" >

                <label for="cpassword"><b>Repetter le  Mot de Passe</b></label>
                <input class='text-field' type="password" placeholder="Repetter le mot de passe" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" >
                

                <p>Si vous Inscrivez sur ce site vous accpter le conditions <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Annuler</button>
                    <button id="submitInscritption"type="submit" name="submit" class="signup">Inscrire</button>
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
    <script src="js/inscrire.js"></script>
    <script src="https://kit.fontawesome.com/40440840ce.js" crossorigin="anonymous"></script>   
</body>
</html>