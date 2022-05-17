<?php
    include "config.php";

    try{
        $conn = OpenCon();
    
    }catch(Exception $e){
        echo 'Message : '.$e->getMessage();
    }
    $sql_query= "SELECT * FROM `pubs`";
    $result = mysqli_query($conn,$sql_query);
    
    
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Find A House dz</title>
    
        <link rel="stylesheet" href="style/toutes_les_annonces.css" />
        <link rel="shortcut icon" href="./images/logo.png" />
    </head>
</head>
<body>
    <!-- La barre de navigation  -->
    <?php   
        if(isset($_SESSION['username']) && $_SESSION['loggedin'] ){ //choisir la barre de navigation selon le cas  
            include_once('nav_bar_user.php');//cas d'un visiteur
        }else{
            include_once('nav_bar_visiteur.php'); //cas d'un visiteur
        } 
    ?>
    
    <!-- La Prtie pour affichier tous les annonce -->
    <section class="list-des-annonces">
      <?php 
            if($result->num_rows > 0) //cas ou on a un resultat postive 
                while($row = $result->fetch_assoc()){
                    echo 
                    "<div class=\"annonce\">
                        <h3 class=\"elemeent-annonce\">".$row['titre']."</h3>
                        <div class=\"elemeent-annonce\">
                            <h4>Prix:".$row['prix']."DA</h4>
                            <h4>".$row['wilaya']."</h4>
                            <div class=\"les-details\">
                                <p class=\"type\">".$row['type']."</p>
                                <p class=\"description\">".$row['corp']."</p>
                                <p class=\"adresse\">".$row['adresse']."</p>
                                <p class=\"nbrpiece\">".$row['nbr_piece']."</p>
                                <p class=\"numero\">".$row['numero_tlp']."</p>
                                </div>
                        </div>
                    </div>";
                }
            else
                echo
                "<h2> accune anonnce </h2>";   //cas ou on a aucune annonce  
        ?>        
           
        

        


    </section>

    <!-- Le footer de la page -->
    <?php include_once('footer.php');?>
    <script src="js/tous_les-annonces.js"> </script>
</body>
</html>