<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once __DIR__ . '/vendor/autoload.php';
switch ($_SERVER['REQUEST_URI']) {
    case '/dashboard':
        include 'pages/dashboard.php';
        break;
    case '/products':
        include 'pages/products.php';
        break;
    case '/screens':
        include 'pages/screens.php';
        break;
    case '/customers':
        include 'pages/customers.php';
        break;
    case '/deliveries':
        include 'pages/deliveries.php';
        break;	
    case '/work':
        include 'pages/work.php';
        break;       	
    default:
        include 'pages/login.php';
        break;
}