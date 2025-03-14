<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzz1
{
    /**
     * @param $value
     *
     * @return string
     */
    function convertirValor($value): string {
        if($this->isFizz($value)) return 'Fizz';
        if($this->isBuzz($value)) return 'Buzz';
        if($this->isFizzBuzz($value)) return 'FizzBuzz';
        return strval($value);
    }

    /**
     * @param $value
     *
     * @return bool
     */
    function isFizz($value): bool
    {
        return $value % 3 === 0;
    }

    /**
     * @param $value
     *
     * @return bool
     */
    function isBuzz($value): bool
    {
        return $value % 5 === 0;
    }

    /**
     * @param $value
     *
     * @return bool
     */
    function isFizzBuzz($value): bool
    {
        return $this->isFizz($value) && $this->isBuzz($value);
    }
}