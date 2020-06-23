

<?php


require "functions.php";


$database->insert("answers",[
    "set_id"=>$_POST['set_id'],
    "question_id"=>$_POST['q_id'],
    "answer_code"=>$_POST["code"]
]);