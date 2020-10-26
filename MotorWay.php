<?php

require_once __DIR__ . './HighWay.php';

use Quete3\HighWay;

final class MotorWay extends HighWay {
    public function __construct(int $nbLanes, int $maxSpeed){
        parent::__construct(4,130);
        $this->currentVehicle = [];
    }
    public function addVehicle(Vehicle $vehicle){
        if ($vehicle instanceof Car){
            parent::setCurrentVehicle($vehicle);
        } else {
            return "Access not allowed";
        }
    }
}