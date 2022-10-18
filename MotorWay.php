<?php


final class MotorWay extends HighWay
{
    protected int $nbLane = 4;
   protected int $maxSpeed = 130;

    public function addVehicle(object $vehicle): string
    {
        $sentence ='';
        if (($vehicle instanceof Bike) || ($vehicle instanceof Skateboard)){
           
            $sentence ="Vehicule non-autorisé";
        }
        else {
            $this->setCurrentVehicles($vehicle);
            $sentence = 'Vehicule autorisé';
        }
        return $sentence;
    }
}