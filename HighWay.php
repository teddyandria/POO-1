<?php

abstract class HighWay
{
   protected array $currentVehicles;
   protected int $nbLane;
   protected int $maxSpeed;


  
   abstract public function addVehicle(object $vehicle);

   public function getCurrentVehicles()
   {
      return $this->currentVehicles;
   }

   public function setCurrentVehicles($currentVehicles)
   {
      $this->currentVehicles[] = $currentVehicles;
   }

   public function getNbLane()
   {
      return $this->nbLane;
   }

   public function setNbLane(int $nbLane)
   {
      $this->nbLane=$nbLane;
   }
   public function getMaxSpeed()
   {
      return $this->maxSpeed;
   }

   public function setMaxSpeed(int $maxSpeed)
   {
      $this->maxSpeed=$maxSpeed;
   }
   
}