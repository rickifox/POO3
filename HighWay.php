<?php
namespace Quete3;

abstract class HighWay {
    private array $currentVehicles;
    private int $nbLane;
    private int $maxSpeed;

    public function __conctruct(int $nbLanes, int $maxSpeed) {
        $this->nbLane = $nbLane;
        $this->maxSpeed =$maxSpeed;
        $this->currentVehicles = [];
    }
    public function getCurrentVehicles() {
        return $this->currentVehicles;
    }
    public function setCurrentVehicles(Vehicle $vehicule) {
        $this->currentVehicles[] = $vehicle;
    }

    public function getNbLane() {
        return $this->nbLane;
    }
    public function setNbLane(int $nbLanes) {
        $this->nbLane = $nbLanes;
    }

    public function getMaxSpeed() {
        return $this->maxSpeed;
    }
    public function setMaxSpeed(int $maxSpeed){
        $this->maxSpeed = $maxSpeed;
    }
    abstract public function addVehicle(Vehicle $vehicle):void;
}
