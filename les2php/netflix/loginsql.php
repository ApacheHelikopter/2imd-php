<?php 

    if(!empty ($_POST)){
        $email = $_POST["Email"];
        $password = $_POST["Password"];

        $conn = @new mysqli("localhost", "root", "root", "netflix");
        $salt = "frznfzjjn..;::";

        $hash = md5($password.$salt);
        $email = $conn->real_escape_string($email);
        $sql = "select * from users where email = '$email' and password = '$hash'";
        $result = $conn->query($sql);
        if($result->num_rows == 1){
            echo "welcome";
        } else{
            echo "F";
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