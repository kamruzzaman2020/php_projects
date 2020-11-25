<?php   
session_start();  
unset($_SESSION['sess_email']);  
//unset( $_SESSION['v_id']);
session_destroy();  
header("location:index.php");  
?>