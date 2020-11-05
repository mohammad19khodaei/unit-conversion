<?php

namespace Mohammad19khodaei\UnitConversion\Tests;

use Mohammad19khodaei\UnitConversion\Temperature;
use PHPUnit\Framework\TestCase;

class TemperatureTest extends TestCase
{
    /** @test */
    public function it_can_calculate_celsius_to_fahrenheit()
    {
        $fahrenheit = Temperature::fromCelsius(100)->toFahrenhite();

        $this->assertEquals(212, $fahrenheit);
    }
}