<?php
    include "config.php";
    try{
        $conn = OpenCon();
    
    }catch(Exception $e){
        echo 'Message : '.$e->getMessage();
    }
    if(isset($_GET['id'])){
        $id =$_GET['id'];
        $sql_query= "DELETE FROM `pubs` WHERE id ='$id'";
        $result = mysqli_query($conn,$sql_query);
        if($result){
            header("Location: mes_annonces.php");
        }

    }else{
        header("Location: index.php");
    }