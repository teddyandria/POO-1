<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{

    private bool $hasParkBrake;
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $loading;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats, $energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    public function setParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }
    public function start(): string
    {
        if ($this->getParkBrake() === true) {
            throw new Exception('attetion ');
        } else {
            $this->currentSpeed = 15;
            return 'Let\'s go';
        }
    }
}
