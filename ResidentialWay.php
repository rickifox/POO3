<?php

require_once __DIR__ . './HighWay.php';

use Quete3\HighWay;

final class ResidentialWay extends HighWay {
    public function __construct(int $nbLanes, int $maxSpeed){
        parent::__construct(2,50);
        $this->currentVehicle = [];
    }
    public function addVehicle(Vehicle $vehicle){
        if ($vehicle instanceof Vehicle){
            parent::setCurrentVehicle($vehicle);
        } else {
            return "Access not allowed";
        }
    }
}