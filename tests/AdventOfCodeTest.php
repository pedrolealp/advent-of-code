<?php

namespace Tests;

use App\DayOne;
use App\DayThree;
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
        $dayTwo = new DayTwo();

        $result = $dayTwo->getPartOne();

        echo $result;

        $this->assertNotNull($result);
    }

    /**
     * @test
     */
    public function DayTwoPartTwo()
    {
        $dayTwo = new DayTwo();

        $result = $dayTwo->getPartTwo();

        echo $result;

        $this->assertNotNull($result);
    }

    /**
     * @test
     */
    public function DayThreePartOne()
    {
        $dayThree = new DayThree();

        $result = $dayThree->getPartOne();

        echo $result;

        $this->assertNotNull($result);
    }

    /**
     * @test
     */
    public function DayThreePartTwo()
    {
        $dayThree = new DayThree();

        $result = $dayThree->gerPartTwo();

        echo $result;

        $this->assertNotNull($result);
    }
}