<?php
$con = new mysqli("localhost", "root", "", "dbstudent");
$sql = "select * from tblstudent";

$result = mysqli_query($con,$sql);
if($result)
	{
		$result = mysqli_query($con,$sql);
		echo "<table border=1>
			<tr>
				<th>Student Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Image</th>
				<th>Action</th>
			</tr>";
		while ($row=mysqli_fetch_array($result))
		{
			echo    "<tr>
						<td>$row[sid]</td>
						<td>$row[sname]</td>
						<td>$row[semail]</td>
						<td><img src=image/$row[simage] height=50px wight=80px></td>
						<td><a href='delete.php?sid=$row[sid]'>Delete<br>
						<a href='updateform.php?sid=$row[sid]'>Update</td>
						 
					</tr>";
		}
	
		echo	"</table>";
	}
	
	echo "<br> New registration ? <a href=student.html>Click Here </a>";
?>