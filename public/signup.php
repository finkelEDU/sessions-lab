<?php
	session_start();
	
	if(isset($_POST["submit"])){
		require "../common.php";
	
		try{
			require_once "../src/DBconnect.php";
			
			$new_user = array(
				"username" => escape($_POST["username"]),
				"password" => escape($_POST["password"])
			);
			
			$sql = sprintf("INSERT INTO %s (%s) values (%s)",
					"Member",
					implode(", ", array_keys($new_user)),
					":" . implode(", :", array_keys($new_user))
					);
					
			$statement = $connection->prepare($sql);
			$statement->execute($new_user);
		}catch(PDOException $error){
			echo $sql . "<br>" . $error->getMessage();
		}
	}
	
	if(isset($_POST["submit"]) && $statement){
		echo $new_user["username"] . " successfully added!";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, inital-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="../css/signin.css">
    <title>Sign Up</title>
</head>


<body>
<div class="container">
    <form method="post" class="form-signin">
        <h2 class="form-signin-heading">Become a Member!</h2>
        <label for="username" >Username</label>
        <input name="username" type="text" id="username" class="form-control" placeholder="Username" required autofocus>
        <label for="password">Password</label>
        <input name="password" type="password" id="password" class="form-control" placeholder="Password" required>

        <button name="submit" value="Submit" class="button" type="submit">Join</button>

    </form>
	
	<hr><a href="index.php">Go to Home</a><br>	
</div>
</body>
</html>
