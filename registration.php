<html>

	<head>
		<title> Registration </title>
	</head>

	<body>

		<?php
                        session_start();
                        ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
                        $servername="localhost";
                        $username="root";
                        $password="Showss66";
                        $dbname="collaborate";
                        $conn = mysqli_connect($servername,$username,$password,$dbname);

                        $sql = "INSERT INTO people (username,password) VALUES ('".$_POST["username"]."','".$_POST["password"]."');";

                        $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

                        if(mysqli_num_rows($result)>0)
                        {
                                echo "You exsist";
                                $_SESSION["valid"] = "Yes";
                                $_SESSION["username"] = $_POST["username"];
                                header("Location: index.php");
                        }
                        else
                        {
                                echo "Invalid Username Password Combination <br>";
                                $_SESSION["valid"] = "Not";
                                header("Location: index.php");
                        }
			
		?>
	</body>
	
</html>
