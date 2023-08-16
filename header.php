	<style>
		*{
			padding:0px;
			margin: 0px;
			box-sizing: border-box;
		}
		a{
			text-decoration: none;
		}
		body{
			style="margin: auto;max-width: 600px min-height: 100vh;
			 align-items: center;
			justify-content: center;
			background: grey;
			padding: 50px;
		}

		header div{
			padding: 20px;
		}

		header a{
			color: white;
		}

		header{
			background-color: purple;
			display: flex;
			color: white;
			justify-content: center;
			align-items: center;
		}

		footer{
			padding: 20px;
			text-align: center;
			background-color: #eee;
		}

		input{
			margin:4px;
			padding:8px;
			width:100%;
		}
		
		textarea{
			margin:4px;
			padding:8px;
			width:100%;
		}

		button{
			padding:10px;
			cursor: pointer;
		}

		container{
		  position: relative;
		  max-width: 850px;
		  width: 100%;
		  background: #fff;
		  padding: 40px 30px;
		  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
		  perspective: 2700px;
		 }
		
	</style>

	<header>

		<div><a href="index.php">Home</a></div>
		<div><a href="profile.php">Profile</a></div>

		<?php if(empty($_SESSION['info'])):?>
			<div><a href="login.php">Login</a></div>
			<div><a href="signup.php">Registration</a></div>
		<?php else:?>
			<div><a href="logout.php">Logout</a></div>
		<?php endif;?>

	</header>