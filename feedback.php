<html>

	<head> <title> Feedback </title> </head>

	<body>

		<?php

		                        ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
                        $servername="localhost";
                        $username="root";
                        $password="Showss66";
                        $dbname="collaborate";
                        $conn = mysqli_connect($servername,$username,$password,$dbname);

                        $sql = "SELECT * FROM PAGES";

                        $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
			
			while($row = $result->fetch_assoc())
			{
				echo "<form action='comment.php' name='".$row["Name"]."' method='POST'>";
				echo $row["Name"]
				echo "<br>";
				echo $row["Text"];
				echo "<br> Add Comment <br>";
				echo "<textarea name='comment' form='".$row["Name"]."'> </textarea>";
				echo "<input type='submit>";
				echo "</form>";
			}
	
		?>
		<a href="index.php"> Home </a>

	</body>

</html>
