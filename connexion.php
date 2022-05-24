<?php
    include "config.php";
    session_start();
    try{
        $conn = OpenCon();
    
    }catch(Exception $e){
        echo 'Message : '.$e->getMessage();
    }
    
    if (isset($_SESSION['username'])&&  $_SESSION['loggedin']) {
        header("Location: acceuil.php");
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
                //sayvgarder les infotmations de l'utilisateurs
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $id;
                $_SESSION["username"] = $username;
                $_SESSION['email']= $email_par_utilisateur; 

                header("Location: acceuil.php");
            } 
        
        }else{    
            echo "<script>alert('the user email n\'exist pas');</script>";
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
        <!-- La barre de navigation pour un utilsateur -->
        <?php include_once('nav_bar_visiteur.php');?>
        

    <!-- The Modal (contains the Sign Up form) -->
    <section id="connecter">
        <div class="sign-in-container">
            <!--<?php
            if(!empty($server_side_form_erreur)) 
                echo
                    "<p class=\"erreur afficher-erreur\">".$server_side_form_erreur."</p>";
            ?>-->
            <h1>Connexions</h1>
            
            <form class="modal-content" method="POST" action="" id="connexion" autocomplete="off">

                <label for="email"><b>Email</b></label>
                <input class='text-field email-text-input' type="email" placeholder="Votre Email" name="email" value="<?php echo $email; ?>" autocomplete="false" >

                <p class="email-erreur erreur"></p>
                
                <label for="password"><b>Mot de Passe</b></label>
                <input class='text-field password-text-input' type="password" placeholder="votre mot de passe" name="password" value="<?php echo $_POST['password']; ?>" autocomplete="false" >

               <p class="password-erreur erreur"></p>


                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Annuler</button>
                    <button id="submitConnnexion"type="submit" name="submit" class="connexionButton">Connexion</button>
                </div>
            </form>
        </div>
    <section>
       <!-- Le footer du page  -->
       <?php include_once('footer.php');?>
    <script src="js/connexion.js"></script>
       
</body>
</html>