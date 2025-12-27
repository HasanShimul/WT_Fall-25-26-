<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "Control/BmiController.php";

$controller = new BmiController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->calculateBMI();
} else {
    $controller->showForm();
}
