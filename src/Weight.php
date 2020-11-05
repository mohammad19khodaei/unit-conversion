<?php

namespace Mohammad19khodaei\UnitConversion;

class Weight
{
    private float $kilogerams;

    public static function kilogerams(float $kilogerams): self
    {
        return new self($kilogerams);
    }

    protected function __construct(float $kilogerams)
    {
        $this->kilogerams = $kilogerams;
    }

    public function toLbs()
    {
        return $this->kilogerams * 2.2046;
    }
}
