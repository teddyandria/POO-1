<?php

class Car
{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }
   
    public function forward(): string
    {
        $this->currentSpeed = 15;
        return 'GO FARWARD !!!!';
    }

    public function brake()
    {
        $brakeit = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $brakeit .= "OMG BRAKE";
        }
        $brakeit .= "Ouf I'm stopped";
        return $brakeit;
    }

    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    public function getEnergy()
    {
        return $this->energy;
    }

    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }
}
