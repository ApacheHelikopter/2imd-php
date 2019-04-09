<?php 
    //mysql commandos zijn verouderd -> niet gebruiken
    //mysqli is wel ok

    require_once('functions.inc.php');

    if (!empty($_POST)){

        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConfirmation = $_POST['password_confirmation'];

        if( canRegister($email, $password, $passwordConfirmation)){
            $conn = @new mysqli("localhost", "root", "root", "netflix");
            if($conn->connect_errno){
                die("DB IS GONE :crab:");
            }

            $salt = "frznfzjjn..;::";
            $password = md5($password.$salt);
            $sql = "insert into users (email, password) values ('$email', '$password')";
            $result = $conn->query($sql);
            var_dump($result);
        } else{
            echo "F";
        }
    }


?><html lang="en">
<head>
  <meta charset="UTF-8">
  <title>IMDFlix</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="netflixLogin netflixLogin--register">
		<div class="form form--login">
			<form action="" method="post">
				<h2 form__title>Sign up for an account</h2>

				<div class="form__error hidden">
					<p>
						Some error here
					</p>
				</div>

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
			</form>
		</div>
	</div>

	<script
		src="https://code.jquery.com/jquery-3.3.1.min.js"
		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		crossorigin="anonymous">
  	</script>

	  <script>

		  $("#email").on("keyup", function(e){
			  var text = $("#email").val();
			  console.log(text);

			$.ajax({
  				method: "GET",
  				url: "ajax/checkname.php",
  				data: { text: text },
				dataType: 'json'
				})
				.done(function( res ) {
					if( res.status == "success"){
						
					}
				});

			e.preventDefault();
		  });
	  
	  </script>
</body>
</html>