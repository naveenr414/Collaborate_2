i<html>

<?php

	                        session_start();
                     ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$_SESSION["valid"] = "Not";
unset($_SESSION["username"]);
                                header("Location: index.php");

?>	

</html>
