<html>

	<head>

		<title> Login </title>

	</head>

	<body>

		<?php
			echo "Hi";
			$servername="localhost";
			$username="navr414";
			$password="Showss66";
			$dbname="collaborate";
			$conn = mysqli_connect($servername,$username,$password,$dbname);
			echo "Hi";
	
			$sql = "SELECT* FROM collaborate WHERE username='".$_POST["username"]."' AND PASSWORD='".$_POST["password"]."';";
			$result = mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0)
			{
				echo "You exsist";
			}
			else
			{
				echo "You don't exist";
			}

		?>

	</body>

</html>
