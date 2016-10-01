<?php
$method=$_SERVER['REQUEST_METHOD'];

header('Content-type: application/json');
if ($method=='GET'){
	$json=array("status"=>1,"msg"=>"a GET response from index11111111111111");
	echo json_encode($json);
}