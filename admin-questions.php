
  <?php
      require "functions.php";
      require "header.php"; 

      $set_id=$_GET["set_id"];
      
      $qs=$database->select("questions","*",[
          "set_id"=>$set_id
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

    <title> Question List</title>
  </head>
  <body>
  
  
    
    <h1>Admin area</h1>

    <p>Set Questions</p>

    <div class="container">
           <div class="row justify-content-end">
              <a href="q_c_form.php?set_id=<?=$set_id?>" class="btn btn-primary">Add Question</a>
          </div>
        <div class="row justify-content-center">
            <div class="col-7">
                  <table class="table table-bordered">
                      <thead>
                        <tr>
                           <th scope="col">#</th>
                            <th scope="col">Title</th>
                          <th scope="col">options</th>
                        </tr>
                      </thead>
                    
                      <tbody>
                        <?php foreach($qs as $q):?>
                          <tr>
                            <th scope="row"><?=$q["id"]?></th>
                            <td><a href="test.php?q_id=<?=$q["id"]?>"><?=$q["title"]?></a></td>
                            <td>
                              <a href="#" class="btn btn-primary btn-sm">Edit </a>
                              <a href="#" class="btn btn-danger btn-sm">Delete </a>
                            </td>
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