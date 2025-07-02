<?php
error_reporting(-1);
session_start();

include("1_head.php");
include_once ('config/db_connect.php');
include_once ('model/products_model.php');
include_once ('model/contact_model.php');

$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path_info = ltrim($request_uri, '/2/neww/3/1/index.php/');

$uri_arr = explode("/", $path_info);

$controller = $uri_arr[0];
$function = $uri_arr[1];

$controller_path = "controller/".$controller."_controller.php";

if (!file_exists($controller_path)) {
    echo "404 Not Found (Controller)";
    exit;
}

include_once $controller_path;

if (!function_exists($function)) {
    echo "404 Not Found (Function)";
    exit;
}

$function();
