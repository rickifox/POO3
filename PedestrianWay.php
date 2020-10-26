<?php

require_once __DIR__ . './HighWay.php';

use Quete3\HighWay;

final class PedestrianWay extends HighWay {
    public function __construct(int $nbLanes, int $maxSpeed){
        parent::__construct(1,10);
        $this->currentVehicle = [];
    }
    public function addVehicle(Vehicle $vehicle){
        if ($vehicle instanceof Bike||$vehicle instanceof Skateboard){
            parent::setCurrentVehicle($vehicle);
        } else {
            return "Access not allowed";
        }
    }
}