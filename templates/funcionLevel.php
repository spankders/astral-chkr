<?php 
ob_start();
session_start();
date_default_timezone_set("America/Argentina");

if(!isset($_SESSION['logged_in'])){
	header('Location: ../index.php');
}

    if($_SESSION['level'] == "5"){ 
        echo 'ADMIN'; }
        elseif ($_SESSION['level'] == "4"){ 
            echo "VIP GOLD";} 
        elseif ($_SESSION['level'] == "3"){ 
            echo "VIP SILVER";} 
        elseif ($_SESSION['level'] == "2"){ 
            echo "VIP BRONCE";} 
        elseif ($_SESSION['level'] == "1"){ 
            echo "FREE USER";} 
            
?>