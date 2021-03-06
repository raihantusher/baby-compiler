
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="http://localhost:8000/static/assets/css/styles.css">

    <title>Question Creation</title>
  </head>
  <body>

  <?php

// import functions which contains $database
require "functions.php";
if(isset($_POST["submit"])){
	$database->insert("users",[
		"username"=>$_POST["username"],
		"fullname"=>$_POST["fullname"],
		"email"=>$_POST["email"],
		"password"=>md5($_POST["password"]),
	]);
}
ifLoggedIn();
?>
<div class="container mt-5">
	<div class="row justify-content-center">
		<div class="col-7">
			<div class="card">
				<div class="card-header">Sign up</div>
				<div class="card-body">
					<form method="POST">
						<div class="form-group">
						<label >UserName:</label>
						<input type="text" class="form-control" name="username">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>

						<div class="form-group">
						<label >Full Name:</label>
						<input type="text" class="form-control" name="fullname">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>

						<div class="form-group">
						<label >Email:</label>
						<input type="text" class="form-control" name="email">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>

						<div class="form-group">
						<label >Password:</label>
						<input type="password" class="form-control" name="password">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<button type="submit" name="submit" value="submit" class="btn btn-primary">Sign Up</button>
					</form>
				</div>
			</div>
		
		</div>
	</div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


   

  </body>
</html>