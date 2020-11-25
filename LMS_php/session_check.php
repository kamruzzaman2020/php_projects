<?php   
session_start();  
if(!isset($_SESSION["sess_email"])){  
    header("location:index.php");  
}  
?>