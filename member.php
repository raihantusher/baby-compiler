<?php

require "functions.php";

 hasRole(2);
 $user_id=$_SESSION["userinfo"]["id"];
 $sql="SELECT sets.id, sets.name,sets.n_q,set_user.score
 FROM sets
 RIGHT JOIN set_user
 ON set_user.set_id = sets.id
 WHERE 
   set_user.user_id=$user_id;";

 $qs=$database->query($sql)->fetchAll();
  
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <?php require "header.php"; ?>

    <h1>Student Area</h1>

    <p>Joinded Set</p>

    <div class="container mt-5">
          <div class="row justify-content-end">
              <a href="q_c_form.php?set_id=<?=$set_id?>" class="btn btn-primary">Join Set</a>
          </div>
          <div class="row justify-content-center">
              <div class="col-7">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Set Name</th>
                        <th scope="col">Number of Questions</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                      <?php foreach($qs as $q): ?>
                        <tr>
                          <th scope="row"><?=$q["id"]?></th>
                          <td><a href="student-questions.php?set_id=<?=$q["id"]?>"><?=$q["name"]?></a></td>
                          <td><?=$q["n_q"]?></td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  
                  </table>
              </div>
        </div>
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>