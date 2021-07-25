<?php

namespace Tests\Unit;

use App\DayOne;
use App\DayTwo;
use PHPUnit\Framework\TestCase;

class AdventOfCodeTest extends TestCase
{
    /**
     * @test
     */
    public function DayOnePartOne()
    {
        $dayOne = new DayOne();

        $result = $dayOne->getPartOne();

        echo $result;

        $this->assertNotNull($result);
    }

    /**
     * @test
     */
    public function DayOnePartTwo()
    {
        $dayOne = new DayOne();

        $result = $dayOne->getPartTwo();

        echo $result;

        $this->assertNotNull($result);
    }

    /**
     * @test
     */
    public function DayTwoPartOne()
    {
        $dayOne = new DayTwo();

        $result = $dayOne->getPartOne();

        echo $result;

        $this->assertNotNull($result);
    }

    /**
     * @test
     */
    public function DayTwoPartTwo()
    {
        $dayOne = new DayTwo();

        $result = $dayOne->getPartTwo();

        echo $result;

        $this->assertNotNull($result);
    }
}