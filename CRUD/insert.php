<?php
$conn = new mysqli("localhost", "root", "", "dbstudent");
$file=$_FILES["simage"]["name"];

$sql = "INSERT INTO tblstudent VALUES ('$_POST[sid]', '$_POST[spass]','$_POST[sname]',
'$_POST[semail]', '$file')";

$conn->query($sql);
move_uploaded_file($_FILES["simage"]["tmp_name"], "image/" . $_FILES["simage"]["name"]);

header("Location:http://localhost/student/view.php");


?>