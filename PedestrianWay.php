<?php


final class PedestrianWay extends HighWay
{
    protected int $nbLane = 1;
    protected int $maxSpeed = 10;
    


    public function addVehicle(object $vehicle): string
    {
        $sentence ='';
        if (($vehicle instanceof Bike) || ($vehicle instanceof Skateboard)){
            $this->setCurrentVehicles($vehicle);
            $sentence = 'Vehicule autorisé';
            
        }
        else {
            $sentence ="Vehicule non-autorisé";
        }
        return $sentence;

}
}