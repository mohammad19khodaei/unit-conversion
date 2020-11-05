<?php

namespace Mohammad19khodaei\UnitConversion\Tests;

use Mohammad19khodaei\UnitConversion\Weight;
use PHPUnit\Framework\TestCase;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_calculate_kilogerams_to_lbs()
    {
        $lbs = Weight::kilogerams(200)->toLbs();

        $this->assertEquals(440.92, $lbs);
    }
}
