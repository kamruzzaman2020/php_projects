<?php 
   include ('./session_check.php');
   include('./config/connection.php');
   $id = $_GET['id'];
   $error = '';
   $query = "delete from category where id = '$id'";
   if(mysqli_query($con,$query)){
    header("Location: category.php");
   }
   else{ $error = 'Error occurred..Try again!!';}
 
?>