<?php

require "src/Calculator.php";
use PHPUnit\Framework\TestCase;

    class CalculatorTest extends TestCase {

        /**
         * Test for addition() method
         */
        function testAdd() {
            $calculator = new Calculator;
            $addend1 = 15;
            $addend2 = 22;
            $sum = $addend1+$addend2;
            $actual = $calculator->addition($addend1, $addend2);

            $this->assertEquals($sum, $actual);
        }

        /**
         * Test for subtraction() method
         */
        function testSubtract() {
            $calculator = new Calculator;
            $minuend = 22;
            $subtrahend = 15;
            $difference = $minuend-$subtrahend;
            $actual = $calculator->subtraction($minuend, $subtrahend);

            $this->assertEquals($difference, $actual);
        }

        /**
         * Test for multiplication() method
         */
        function testMultiply() {
            $calculator = new Calculator;
            $multiplicand = 22;
            $multiplier = 15;
            $product = $multiplicand*$multiplier;
            $actual = $calculator->multiplication($multiplicand, $multiplier);

            $this->assertEquals($product, $actual);
        }

        /**
         * Test for division() method
         */
        function testDivide() {
            $calculator = new Calculator;
            $dividend = 22;
            $divisor = 15;
            $quotient = $dividend/$divisor;
            $actual = $calculator->division($dividend, $divisor);

            $this->assertEquals($quotient, $actual);
        }
    }
?>