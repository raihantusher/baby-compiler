<?php

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


$folder=__DIR__.'/bin/'.uniqid();

mkdir($folder);

$code_file=$folder."/solution.py";
$input_file=$folder."/input.txt";
$output_file=$folder."/output.txt";
$error_file=$folder."/error.txt";

write_code($code_file,$code=$code);
write_code($input_file,$input);

copy("py.bat",$folder.'/py.bat');

$command=$folder.'/py.bat';

echo shell_exec("./run.bat");
echo exec('whoami');


//exec('rd /s /q $folder');