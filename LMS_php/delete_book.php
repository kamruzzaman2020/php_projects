<?php 
   include ('./session_check.php');
   include('./config/connection.php');
   $id = $_GET['id'];
   $error = '';
   $query = "delete from books where id = '$id'";
   if(mysqli_query($con,$query)){
    header("Location: book.php");
   }
   else{ $error = 'Error occurred..Try again!!';}
 
?>