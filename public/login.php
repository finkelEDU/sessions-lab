<?php
require_once ('config.php');
require "../common.php";
session_start();

	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, inital-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="../css/signin.css">
    <title>Sign in</title>
</head>


<body>
<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputUsername" >Username</label>
        <input name="inputUsername" type="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword">Password</label>
        <input name="inputPassword" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button name="Submit" value="Login" class="button" type="submit">Sign in</button>

    </form>
	
	<hr><a href="index.php">Go to Home</a><br>
	<hr><a href="signup.php">Sign Up</a><br>
	<hr><a href="other.php">Other Page (No login needed)</a><br>
	<hr><a href="another.php">Another Page (No login needed)</a><br>
	
	<?php
		require "../src/login_logic.php";
		$login = new login_logic();
		$login->check();
	
		/*if(isset($_POST["Submit"])){
			if((escape($_POST["Username"]) == $Username) && (escape($_POST["Password"]) == $Password)){
				$_SESSION["Username"] = $Username;
				$_SESSION["Active"] = true;
				
				header("location:index.php");
				exit;
			}else{
				echo "Incorrect Username or Password";
			}
		}*/
	?>
	
	
</div>
</body>
</html>
