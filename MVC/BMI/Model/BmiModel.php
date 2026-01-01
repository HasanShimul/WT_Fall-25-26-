<?php

class BmiModel {
    public function calculate($height, $weight) {
        // convert height to meter
        $heightInMeter = $height / 100;
        return $weight / ($heightInMeter * $heightInMeter);
    }
    public function savetoDB($name,$hieght,$weight){
        return true;
    }
}
