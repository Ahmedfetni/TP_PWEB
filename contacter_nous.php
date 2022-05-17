<?php 

    include 'config.php';
    
    //error_reporting(0);

    session_start();
    try{
        $conn = OpenCon();
    
    }catch(Exception $e){
        echo 'Message : '.$e->getMessage();
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
        <!-- La barre de navigation pour un utilsateur -->
        <?php include_once('nav_bar_visiteur.php');?>
        
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
       <!-- Le footer du page  -->
       <?php include_once('footer.php');?>
        <!--La Partie JS-->
        <script src="js/contacter_nous.js"></script>
        
    </body>
</html>
