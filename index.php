<html>
	<head>
		<?php
			session_start();
		?>
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
                                        echo '<form action="login.php" method="post" name="loginForm">';
                                        echo 'Username <input type="text" name="username">';
                                        echo 'Password <input type="password" name="password">';
                                        echo '<input type="submit">';
					echo '</form>';
                                }
                        ?>
                </p>
			<?php
				if(isset($_SESSION["valid"]))
				{
					if($_SESSION["valid"] === "Not")
					{	
						echo "<br> Invalid Username Password Combination";
					}
       				}
			?>
	 </body>

</html>
