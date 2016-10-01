<?php

$method=$_SERVER['REQUEST_METHOD'];
//aaaaa
header('Content-type: application/json');
if ($method=='GET'){
	$json=array("status"=>1,"msg"=>"a GET response from index");
	echo json_encode($json);
}