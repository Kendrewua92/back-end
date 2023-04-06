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

		<h3>Add a new parent</h3>
		<form method="post" action="addparent.php">	
			<label>Parent Name:</label>
			<input type="text" name="pname"><br>
			<label>Parent Last Name:</label>
			<input type="text" name="plname"><br>
			<label>Parent ID:</label>
			<input type="text" name="pid"><br>
			<label>Stduent ID:</label>
			<input type="text" name="psid"><br>
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
		
			$pname = $_POST['pname'];
			$plname = $_POST['plname'];
			$pid = $_POST['pid'];
			$psid = $_POST['psid'];
			
			$sql = "INSERT INTO Parent (PID, pname, plname, PSID ) VALUES ('$pid', '$pname', '$plname', '$psid')";
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