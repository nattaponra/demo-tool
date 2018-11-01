<?php
require_once "Triangle.php";
header("Content-type: application/json");

if( empty($_GET["a"]) ||  empty($_GET["b"]) ||  empty($_GET["c"])){

    $response["status"]  = "error";
    $response["message"] = "Invalid parameters";

    if(empty($_GET["a"])){
        $response["parameters"][] = "a is required";
    }

    if(empty($_GET["b"])){
        $response["parameters"][] = "b is required";
    }

    if(empty($_GET["c"])){
        $response["parameters"][] = "c is required";
    }

    $response =json_encode($response,true);
    exit($response);
}


$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];

$triangle = new Triangle();
$result = $triangle->validateTriangle($a,$b,$c);

$response["status"] = "OK";
$response["result"] = $result;


$response =json_encode($response,true);
exit($response);