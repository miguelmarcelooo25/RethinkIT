<?php 

	require "functions.php";

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$email = addslashes($_POST['email']);
		$password = addslashes($_POST['password']);

		$query = "select * from users where email = '$email' && password = '$password' limit 1";

		$result = mysqli_query($con,$query);

		if(mysqli_num_rows($result) > 0){

			$row = mysqli_fetch_assoc($result);

			$_SESSION['info'] = $row;
			header("Location: profile.php");
			die;
		}else{
			$error = "wrong email or password";
		}
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login - application</title>
</head>
<body>

	<?php require "header.php";?>

		<div style="margin: auto;max-width: 600px min-height: 100vh;
		  align-items: center;
		  justify-content: center;
		  background: #grey;
		  padding: 30px;">

			<?php 

				if(!empty($error)){
					echo "<div>".$error."</div>";
				}

			?>
			<h1 style="text-align: center;">Login</h1>
			
			<form method="post" style="margin: auto;padding:10px; position: relative;
			  max-width: 850px;
			  width: 100%;
			  background: #fff;
			  padding: 40px 30px;
			  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
			  perspective: 2700px;">
				
				<input type="email" name="email" placeholder="Email" required><br>
				<input type="password" name="password" placeholder="Password" required><br>

				<button>Login</button><br></br>
			</form>	
			</div>
		</div>
	<?php require "footer.php";?>

</body>
</html>