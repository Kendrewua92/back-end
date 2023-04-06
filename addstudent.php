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

		<h3>Add a new student</h3>
		<form method="post" action="addstudent.php">
			<label>Student Name:</label>
			<input type="text" name="sname"><br>
			<label>Student Last Name:</label>
			<input type="text" name="slname"><br>
			<label>Student ID:</label>
			<input type="text" name="sid"><br>
			<label>Student in Class:</label>
			<input type="text" name="scid"><br>
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
		
			$sname = $_POST['sname'];
			$slname = $_POST['slname'];
			$sid = $_POST['sid'];
			$scid = $_POST['scid'];
			
			$sql = "INSERT INTO Student (SID, sname, lname, SCID) VALUES ('$sid', '$sname', '$slname', '$scid')";
			if (mysqli_query($link, $sql)) {
			  echo "New record created successfully";
			} else {
			  echo "Error adding record ";
			}
		
		}
		
		$link->close();
		?>
		

	
	</body>

</html>