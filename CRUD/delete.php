<?php
$con = new mysqli("localhost", "root", "", "dbstudent");

$sql = "delete from tblstudent where sid=$_GET[sid]";

mysqli_query($con,$sql);

header("location:http://localhost/student/view.php");
?>