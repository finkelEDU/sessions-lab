<?php
//require "../common.php";

class login_logic{
	
	public function check(){		
		if(isset($_POST["Submit"])){
			try{
				require_once "../config.php";
				$connection = new PDO($dsn, $username, $password, $options);
				
				$sql = "SELECT username, password FROM Member where username = :inputUsername";
				$statement = $connection->prepare($sql);
				$tmpUser = ($_POST["inputUsername"]);
				$statement->bindParam(":inputUsername", $tmpUser);
				$statement->execute();
				$result = $statement->fetchAll();
				
				foreach($result as $row => $rows){
					$uname_db = $rows["username"];
					$pwd_db = $rows["password"];
					
					if((escape($_POST["inputUsername"]) == $uname_db) && (escape($_POST["inputPassword"]) == $pwd_db)){
						$_SESSION["Username"] = $uname_db;
						$_SESSION["Active"] = true;
						
						header("location:index.php");
						exit;
					}else{
						echo "Incorrect username or password";
					}
				}
			}catch(PDOException $error){
				$error->getMessage();
			}
		}
	}
}