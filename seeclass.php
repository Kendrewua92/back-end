<html>
	<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>School Management System</title>
    <style>
      #navbar{
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial,sans-serif;
                display:flex;
                align-items:center;
                justify-content:space-between;
                box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0rgba(0, 0, 0, 0.19);
                margin:0px;
                padding:20px;
            }
      a.active{
                color:black;
                text-decoration:underline;
      }
      .h2{
                margin:0 auto;
                color:white;
}
    </style>
          <h2><marquee>Welcome to our School Management System</marquee></h2>
	</head>
	<body>
	<header class="intro">
  	<nav id="navbar">
	<p>Choose what you would like to do:</p>
    <div>
        <a href="index.php">Home</a>| 
		<a href="addstudent.php">Add a student</a>|
		<a href="addparent.php">Add a parent</a>| 
        <a href="addteacher.php">Add a teacher</a>|
		<a href="seestudent.php">See all students</a>| 
		<a href="seeparent.php">See all parents</a>|
        <a href="seeteacher.php">See all teacher</a>|
        <a href="seeclass.php">See all class</a>
    </div>
	</nav>
 
 	</header>
		
		<h3>See all class</h3>
	
		<table>
			<tr>
				<th width="150px">Class ID<br><hr></th>
				<th width="250px">Class Name<br><hr></th>
			</tr>
					
		<?php
        $host = "sdb-58.hosting.stackcp.net";
        $username  = "student100-353031374b51";
        $passwd = "ua92-studentAc";
        $dbname = "student100-353031374b51";
		$link = mysqli_connect("$host","$username","$passwd","$dbname");
      
		if ($link === false) {
				die("Connection failed: ");
			}

		$sql = mysqli_query($link, "SELECT * FROM Class");
		while ($row = $sql->fetch_assoc()){
		echo "
			<tr>
				<th>{$row['CID']}</th>
				<th>{$row['cname']}</th>
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