<?php

namespace Mohammad19khodaei\UnitConversion;

class Weight
{
    private float $kilogerams;

    public static function fromKilogerams(float $kilogerams): self
    {
        return new self($kilogerams);
    }

    protected function __construct(float $kilogerams)
    {
        $this->kilogerams = $kilogerams;
    }

    public function toLbs(): float
    {
        return $this->kilogerams * 2.2046;
    }
}
