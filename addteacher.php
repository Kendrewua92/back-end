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
        <a href="seeteacher.php">See all teacher</a>

		<h3>Add a new teacher</h3>

		<form method="post" action="addteacher.php">	
			<label>Teacher Name:</label>
			<input type="text" name="tname"><br>
			<label>Teacher Last Name:</label>
			<input type="text" name="tlname"><br>
			<label>Teacher ID:</label>
			<input type="text" name="tid"><br>
			<label>Teaching Class:</label>
			<input type="text" name="tcid"><br>
			<input type="submit" name="submit">
		</form>
		
		<?php
        $host = "sdb-58.hosting.stackcp.net";
        $username  = "student100-353031374b51";
        $passwd = "ua92-studentAc";
        $dbname = "student100-353031374b51";
		$link = mysqli_connect("$host","$username","$passwd","$dbname");
      
		if ($link === false) {
			die("Connection failed: ");
		}
		if (isset($_POST['submit'])) {
		
			$tname = $_POST['tname'];
			$tlname = $_POST['tlname'];
			$tid = $_POST['tid'];
			$tcid = $_POST['tcid'];
			
			$sql = "INSERT INTO Teacher (TID, tname, tlname, TCID ) VALUES ('$tid', '$tname', '$tlname', '$tcid')";
			if (mysqli_query($link, $sql)) {
			  echo "New record created successfully";
			} 
			else {
			  echo "Error adding record ";
			}
		
		}
		
		$link->close();
		?>
	
		

	
	</body>

</html>