<?php

if (!empty($_POST)){
    
	$email = $_POST['email'];
    $password = $_POST['password'];

    $options = [
        'cost' => 12
    ];
    $hash = password_hash($password, PASSWORD_DEFAULT, $options);
    
    $conn = new PDO("mysql:host=localhost;dbname=spotify", "root", "root");
    $statement = $conn->prepare("insert into users (email, password) values (:email, :password)");
    $statement->bindParam(":email", $email);
    $statement->bindParam(":password", $hash);
	$result = $statement->execute();
	header("Location: login.php");
}

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Spotify - Sign Up</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="spotifyLogin netflixLogin--register">
	<div class="form form--login">
			<form action="" method="post">
				<h2 form__title>Sign up for an account</h2>

				<div class="form__field">
					<label for="email">Email</label>
					<input type="text" id="email" name="email">
				</div>
				<div class="form__field">
					<label for="password">Password</label>
					<input type="password" id="password" name="password">
				</div>

                <div class="form__field">
					<label for="password_confirmation">Confirm your password</label>
					<input type="password" id="password_confirmation" name="password_confirmation">
				</div>

				<div class="form__field">
					<input type="submit" value="Sign me up!" class="btn btn--primary">	
				</div>
				<div>
					<p>Already got an account? <a href="login.php">Log in here</a></p>
				</div>
			</form>
		</div>
	</div>
</body>
</html>