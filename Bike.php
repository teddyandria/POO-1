<?php

class Bike extends Vehicle implements LightableInterface
{
    public function switchOn(): bool
    {
        if ($this->currentSpeed > 10 === true) {
            return true;
        }
    }

    public function switchOff(): bool
    {
        return true;
    }
}
