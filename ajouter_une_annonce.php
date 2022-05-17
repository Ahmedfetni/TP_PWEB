<?php
    include 'config.php';

    //error_reporting(0);
    
    session_start();
    try{
        $conn = OpenCon();
    
    }catch(Exception $e){
        echo 'Message : '.$e->getMessage();
    }
    if (isset($_SESSION['username']) && $_SESSION['loggedin'] ) {
        
    

        if (isset($_POST['submit'])) {
            
            $id_utilisateur = $_SESSION['id'];
            $titre = $_POST['titre'];
            $corp = $_POST['body'];
            $type = $_POST['type'];
            $prix = $_POST['prix'];
            $adresse = $_POST['adresse'];
            $wilaya = $_POST['wilaya'];
            $nbr_pieces = $_POST['nbrpiece'];
            $tlp = $_POST['tlp'];
            
            $sql_query = "INSERT INTO `pubs`( `user_id`, `titre`, `corp`, `type`, `prix`, `adresse`, `wilaya`, `nbr_piece`, `numero_tlp`) VALUES ('$id_utilisateur', '$titre', '$corp','$type', '$prix', '$adresse', '$wilaya', '$nbr_pieces', '$tlp')";
            $result = mysqli_query($conn, $sql_query);
			if ($result) {
            echo "<script>alert('annonce cree')</script>";
            }else{
                echo "<script>alert('Erreur')</script>";
            }
            
        }
    }else{
        header("Location: index.php");
        
    }    
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Find A House dz</title>
    
        <link rel="stylesheet" href="style/ajouter_une_annonce.css" />
        <link rel="shortcut icon" href="./images/logo.png" />
    </head>
    <body>
    <!-- La barre de navigation pour un utilsateur -->
    <?php include_once('nav_bar_user.php');?>
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
                    <input class="text-field titre-text-input" type="text" name="prix" >
                    <p class="prix-erreur erreur"></p>
                    <!-- Pour l'adresse et la wilaya-->
                    <div id ="lieu" class="form-group">
                        <label for="adresse"><b>Adresse</b></label>
                        <input class="text-field titre-text-input" name="adresse" id="adresse" type="text"/>
                        
                        <label for="wilaya"><b>Wilaya</b></label>
                        <input class="text-field titre-text-input" name="wilaya" id="wilaya" type="text"/>
                    </div>
                    <p class="lieu-erreur erreur"></p>

                    <label for="nbrpeice"><b>Nombre des pieces</b></label>
                    <input class="text-field titre-text-input" name="nbrpiece" id="nbrpiece" type="text"/>
                    <p class="nbrpiece-erreur erreur"></p>

                    <label for="tlp"><b>Numero de telephone</b></label>
                    <input class="text-field titre-text-input" name="tlp" id="tlp" type="text" >
                    <p class="tlp-erreur erreur"></p>

                    <button id="envoyer-btn" type="submit" name="submit">Envoyer</button>

                </form>
            </div>
        <section>
            <!-- Le footer du page  -->
         <?php include_once('footer.php');?>
         
        <script src="js/ajouter_une_annonce.js"></script>
         
    </body>
    </html>