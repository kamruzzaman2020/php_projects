<html>
	<body>
	<?php
	$con = mysqli_connect("localhost", "root", "", "dbstudent");
    $query="select * from tblstudent where sid=$_GET[sid]";
    $data=mysqli_query($con,$query);
	$r=mysqli_fetch_array($data);
	
	?>
	<form action="update.php" method="post">
		Student Id:<input type="text" name="sid" value="<?php echo $r['sid'];?>"disable><br>
		Password:<input type="text" name="spass" value="<?php echo $r['spass'];?>"><br>
		Name:<input type="text" name="sname" value="<?php echo $r['sname'];?>"><br>
		Email:<input type="text" name="semail" value="<?php echo $r['semail'];?>"><br>
		Image:<input type="file" name="simage" value="<?php echo $r['simage'];?>"><br>
		<input type="submit" value="save"><br>
		</form>
	</body>
</html>