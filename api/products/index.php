<?php
////////////////////////////////////////////
/*
PRODUCTS
*/
//////////////////////////////////////////////
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
include "func.php";

getProducts();
