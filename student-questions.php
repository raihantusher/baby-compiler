
<?php
 require "functions.php";
 $set_id=$_GET["set_id"];

 $qs=$database->query("
        SELECT questions.id, questions.title,answers.result

        FROM `questions`
        
        INNER JOIN `answers`
        
          ON `questions`.`id`=`answers`.`question_id`
        
        WHERE `questions`.`set_id`=5
  ")->fetchAll();

  $answer_pending=$database->count("answers",[
      "set_id"=>$set_id,
      "result"=>"pending"
  ]);

  $answer_right=$database->count("answers",[
    "set_id"=>$set_id,
    "result"=>"right"
  ]);




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

  <?php 
  
    require "header.php";
  
  ?>
    <h1>Student area</h1>

    <p>Set Questions</p>

<div class="container-fluid">
    <!-- score -->
    <div class="row justify-content-center">
                <div class="col-3 ">
                      <div class="card bg-primary">
                        <div class="card-header"> Total</div>
                            <div class="card-body">
                                  <p class="card-text"><?=count($qs)?></p>
                                 
                              </div>
                        </div>
                </div>

                <div class="col-3 ">
                      <div class="card bg-success" >
                        <div class="card-header">Score</div>
                              <div class="card-body">
                                <p class="card-text"><?=$answer_right ; ?></p>
                                 
                              </div>
                        </div>
                </div>

                <div class="col-3 ">
                      <div class="card bg-info" >
                        <div class="card-header"> Pending</div>
                              <div class="card-body">
                                  <p class="card-text"><?=$answer_pending?></p>
                                  
                              </div>
                        </div>
                </div>
        </div>
    </div>
    
    
    
      <div class="container mt-5">
          <div class="row justify-content-center">
              <div class="col-7">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Status</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                      <?php foreach($qs as $q): ?>
                        <tr>
                          <th scope="row"><?=$q["id"]?></th>
                          <td><a href="test.php?q_id=<?=$q["id"]?>"><?=$q["title"]?></a></td>
                          <td><?=$q["result"]?></td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  
                  </table>
              </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>