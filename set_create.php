
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="http://localhost:8000/static/assets/css/styles.css">

    <title>Set Creation</title>
  </head>
  <body>

<?php

	// import functions which contains $database
	require "functions.php";
  if(isset($_POST["submit"])){
	$database->insert("sets",[
		"name"=>$_POST["set_name"],
		"n_q"=>$_POST["n_q"],
		"min"=>$_POST["min"],
		"uuid"=>$_POST['uuid'],
		"status"=>"active"
	]);
  }
?>

<?php require "header.php"; ?>

<div class="container">
	<div class="row">
		<div class="col-7">
			<form method="POST" >
				<!-- set name -->
				  <div class="form-group">
				    <label for="exampleInputEmail1">Set Name:</label>
				    <input type="text" name="set_name" class="form-control"  aria-describedby="emailHelp">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>
					<!-- set name -->

				  	<!-- set number of question -->
				  <div class="form-group">

				    <label >Number of Questions:</label>
				    <input type="number" name="n_q" class="form-control" >
				  </div>
				  	<!-- set number of question -->
				
					<!-- set min -->
				  <div class="form-group">
				    <label >Set Timeout:</label>
				    <input type="number" name="min" class="form-control" >
				  </div>
				  	<!-- set min -->

					<!-- set uid -->
				  <div class="form-group">
				    <label >Unique ID:</label>
				    <input type="text" class="form-control" name="uuid" value=<?=uniqid()?>">
				  </div>
				  <!-- set uid finished here-->

				
				  <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
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