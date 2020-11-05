<?php

namespace Mohammad19khodaei\UnitConversion;

class Temperature
{
    protected float $celsuis;

    public static function fromCelsius(float $celsuis): self
    {
        return new self($celsuis);
    }

    public function __construct(float $celsuis)
    {
        $this->celsuis = $celsuis;
    }

    public function toFahrenhite()
    {
        return ($this->celsuis * 1.8) + 32;
    }
}
