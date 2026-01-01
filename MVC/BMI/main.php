<?php
require_once "Control/BmiController.php";

$controller = new BmiController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->calculateBMI();
} else {
    $controller->showForm();
}
