<?php
$con = new mysqli("localhost", "root", "", "dbstudent");
$sql="UPDATE `dbstudent`.`tblstudent` SET `spass` = '$_POST[spass]', `sname` = '$_POST[sname]', `semail` = '$_POST[semail]' WHERE `tblstudent`.`sid` = '$_POST[sid]';";
//$sql = "UPDATE tblstudent SET spass ='$_POST[spass]',sname = '$_POST[sname]',semail = '$_POST[semail]' WHERE tblstudent.sid = '$_POST[sid]';";

mysqli_query($con,$sql);

header("location:http://localhost/student/view.php");
?>