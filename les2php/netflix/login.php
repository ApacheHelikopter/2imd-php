<?php 

	function canLogin($email, $password){
		if( $email != "net@flix.com" || $password != "binge"){
			return false;
		} else{
			return true;
		}
	}

	if(!empty($_POST)){
		$email = $_POST["Email"];
		$password = $_POST["Password"];

		if (canLogin($email, $password) === true){
			$salt = "grzqgrqe(§(g(fefy(y(y)";
			$cookieval = $email . "," . md5($email.$salt);
			setcookie("loggedin", $cookieval, time() +60*60*24*30); //1 month
			header("Location: index.php");
		} else{
			$error = true;
		}
	}

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>IMDFlix</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="netflixLogin">
		<div class="form form--login">
			<form action="" method="post">
				<h2 form__title>Sign In</h2>

				<?php if(isset($error)): ?>
				<div class="form__error">
					<p>
						Sorry, we can't log you in with that email address and password. Can you try again?
					</p>
				</div>
				<?php endif; ?>

				<div class="form__field">
					<label for="Email">Email</label>
					<input type="text" id="Email" name="Email">
				</div>
				<div class="form__field">
					<label for="Password">Password</label>
					<input type="password" id="Password" name="Password">
				</div>

				<div class="form__field">
					<input type="submit" value="Sign in" class="btn btn--primary">	
					<input type="checkbox" id="rememberMe"><label for="rememberMe" class="label__inline">Remember me</label>
				</div>
			</form>
		</div>
	</div>
</body>
</html>