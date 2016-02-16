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

                        $sql = "INSERT INTO  PAGES (Name,Username,Text,Comments) VALUES ('".$_POST["Name"]."','".$_SESSION["username"]."','".$_POST["Cont"]."','');";

                        $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
			header("Location: index.php");

?>




