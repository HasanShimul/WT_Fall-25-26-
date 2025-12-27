<?php
require_once "Model/BmiModel.php";

class BmiController {

    public function showForm() {
        require "View/form.php";
    }

    public function calculateBMI() {
        $name = $_POST['name'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];

        $model = new BmiModel();
        $bmi = $model->calculate($height, $weight);

        require "View/result.php";
    }
}
