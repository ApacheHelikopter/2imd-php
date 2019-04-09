<?php
	
	if(!empty($_POST)){
		$conn = new PDO("mysql:host=localhost;dbname=netflix", "root", "root");
		$email = $_POST['email'];
		$password = $_POST['password'];

		$statement = $conn->prepare("select * from users where email = :email");
		$statement->bindParam(":email", $email); //SQL Injection safe
		$statement->execute();
		$user = $statement->fetch(PDO::FETCH_ASSOC);
		
		if(password_verify($password, $user['password'])){
			echo "true";
		} else{
			echo "false";
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

				<?php if (isset($error)): ?>
				<div class="form__error">
					<p>
						Sorry, we can't log you in with that email address and password. Can you try again?
					</p>
				</div>
				<?php endif; ?>

				<div class="form__field">
					<label for="Email">Email</label>
					<input type="text" name="email">
				</div>
				<div class="form__field">
					<label for="Password">Password</label>
					<input type="password" name="password">
				</div>

				<div class="form__field">
					<input type="submit" value="Sign in" class="btn btn--primary">	
					<input type="checkbox" id="rememberMe"><label for="rememberMe" class="label__inline">Remember me</label>
				</div>

				<div>
					<p>No account yet?<a href="register.php">Sign up here</a></p>
				</div>
			</form>
		</div>
	</div>
</body>
</html>