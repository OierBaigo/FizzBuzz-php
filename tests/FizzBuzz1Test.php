<?php

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\FizzBuzz1;
use PHPUnit\Framework\TestCase;

class FizzBuzz1Test extends TestCase
{
    /**
     * @test
     */
    public function given1Return1()
    {
        $fizz = new FizzBuzz1();

        $value = $fizz->convertirValor(1);

        $this->assertEquals('1',$value);
    }

    /**
     * @test
     */
    public function given15ReturnFizzBuzz()
    {
        $fizz = new FizzBuzz1();

        $value = $fizz->isFizzBuzz(15);

        $this->assertTrue($value);
    }

    /**
     * @test
     */
    public function given3ReturnFizz()
    {
        $fizz = new FizzBuzz1();

        $value = $fizz->isFizz(3);

        $this->assertTrue($value);
    }

    /**
     * @test
     */
    public function given5ReturnBuzz()
    {
        $fizz = new FizzBuzz1();

        $value = $fizz->isBuzz(5);

        $this->assertTrue($value);
    }
}