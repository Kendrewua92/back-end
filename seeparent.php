<html>

	<head><title>School Management System</title></head>

	<body>
		
		<h2>Welcome to our School Management System</h2>
		
		<p>Choose what you would like to do:</p>
		<a href="index.php">Home</a> | 
		<a href="addstudent.php">Add a student</a> | 
		<a href="addparent.php">Add a parent</a> | 
        <a href="addteacher.php">Add a teacher</a>
		<a href="seestudent.php">See all students</a> | 
		<a href="seeparent.php">See all parents</a>
        <a href="seeteacher.php">See all teacher</a>>
	
		<hr>
		
		<h3>See all parents</h3>
	
		<table>
		
			<tr>
				<th width="150px">Parent ID<br><hr></th>
				<th width="250px">Parent Name<br><hr></th>
				<th width="250px">Parent Last Name<br><hr></th>
				<th width="250px">Student's Name<br><hr></th>
			</tr>
					
			<?php
			$host = "sdb-58.hosting.stackcp.net";
			$username  = "student100-353031374b51";
			$passwd = "ua92-studentAc";
			$dbname = "student100-353031374b51";
			$link = mysqli_connect("$host","$username","$passwd","$dbname");
				  
			$sql = mysqli_query($link, "SELECT * FROM parents");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['PID']}</th>
				<th>{$row['pname']}</th>
				<th>{$row['plname']}</th>
				<th>{$row['PSID']}</th>
			</tr>";
			}
			?>
			
		</table>
		
		<?php
		$link->close();
		?>
	
		<hr>
	</body>

</html>