<?php


ini_set('max_execution_time', 1000);
/*
*
* seperating all the inputs 
*
* if correction is needed in future
*/

function write_code($filename,$code){
	$filename=$filename;
	$myfile = fopen($filename, "w") or die("Unable to open file!");
	fwrite($myfile, $code);
	fclose($myfile);
}

$code= $_POST["code"];
$input=$_POST["input"];


//$folder=__DIR__.'/bin/'.uniqid();

//mkdir($folder);

$code_file="solution.py";
$input_file="input.txt";
$output_file="output.txt";
$error_file="error.txt";

write_code($code_file,$code=$code);
write_code($input_file,$input);

//copy("py.bat",/py.bat');



$command="py.bat $code_file $input_file $output_file $error_file";

echo exec($command);


//read output & error files
$output=file_get_contents($output_file);
$error=file_get_contents($error_file);


$outlet=[];
$outlet["error"]=0;


if(trim($error)==""){

	$outlet["code"] ="<pre>$output</pre>";
}
else{
	$outlet["error"]=1;
	$outlet["code"]="<pre>$error</pre>";
}

echo json_encode($outlet);