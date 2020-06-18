<?php

require 'Medoo.php';
use Medoo\Medoo;

$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'oj',
    'server' => 'localhost',
    'username' => 'root',
    'password' => ''
]);

session_start();

//redirect function
function redirect($loc){
	header("location: $loc");
	exit();
}


function hasRole($role_id){
	
	if(isset($_SESSION)){
		print_r($_SESSION);
		if($_SESSION["userinfo"]["role"]==$role_id){
			return true;
		}
		else {
			redirect("login.php");
		}
	}
	else{
		// if session is not set then
		// redirect to login
		redirect("login.php");
	}
}

//redirect when user is logged in

function ifLoggedIn(){
	
	if(isset($_SESSION["userinfo"])){
		
		
		if($_SESSION["userinfo"]["role"]==1){
			redirect("admin.php");
		}

		if($_SESSION["userinfo"]["role"]==0){
			redirect("member.php");
		}
		
	}
}

/*
* testing case


$database->insert("sets",[
	"name"=>"raihan ahmedsss",
	"n_q"=>5,
	"min"=>30,
	"uuid"=>uniqid(),
	"status"=>"active"
]);

$data = $database->get("sets", "*", [
	"id" => 5
]);
print_r($data);

$del=$database->delete("sets", [
	"id" => 6
]);
print_r($del);

*/


// answer table
/*
$database->insert("answers",[
	"question_id"=>"1",
	"answer_code"=>5,
	"set_id"=>30
]);
*/

//question table
/*
$database->insert("questions",[
	"title"=>"ekta question",
	"description"=>"%% ",
	"question_template"=>"print('hello')",
	"set_id"=>1
]);
*/

// users table
/*
$database->insert("users",[
	"username"=>"1",
	"fullname"=>5,
	"email"=>30,
	"password"=>md5("raihan"),
]);
*/

function set_creation($arr){
    
}

function set_deletion(){

}

function set_edit(){}