<html>
	<head>
		<link type="text/css" rel="stylesheet" href="stylesheet.css">
                <title> Collaborate </title>

        </head>

        </body>
                <p align="right">
                        <?php
                                if(isset($_SESSION["username"]))
                                {
                                        echo "Hello ".$_SESSION["username"];
                                }
                                else
                                {
                                        echo '<form action="login.php" name="loginForm">';
                                        echo 'Username <input type="text" name="username">';
                                        echo 'Password <input type="password" name="password">';
                                        echo '</form>';
                                }
                        ?>
                </p>
                <h1> Login to see Anything </h1>
        </body>

</html>
