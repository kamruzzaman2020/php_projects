<?php 
   include ('./session_check.php');
   include('./config/connection.php');
   $id = $_GET['id'];
   $error = '';
   $query = "delete from author where id = '$id'";
   if(mysqli_query($con,$query)){
    header("Location: author.php");
   }
   else{ $error = 'Error occurred..Try again!!';}
 echo $error;
?>