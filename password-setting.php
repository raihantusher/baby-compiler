
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


ifLoggedIn();
	
?>

<?php require "header.php"; ?>
<h3>Forgot Password</h3>

<div class="container">
	<div class="row">
		<div class="col-7">
			<form method="POST">
		
				  <div class="form-group">
				    <label >Old Password:</label>
				    <input type="password" class="form-control" name="username">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>

                  
				  <div class="form-group">
				    <label >New Password:</label>
				    <input type="password" class="form-control" name="username">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>

                  
				  <div class="form-group">
				    <label >Repeat New Password:</label>
				    <input type="password" class="form-control" name="username">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>


				
				  <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
				</form>
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