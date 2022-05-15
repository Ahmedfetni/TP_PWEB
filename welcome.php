<?php
    session_start();
    if (isset($_SESSION['username'])) {
        echo
            "<h1> Bienvenu ".$_SESSION['username']."</h1>";
    }
    
        
?>