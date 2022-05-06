<?php

    /**
     * PHP 403 Automated Unit Testing: Practical Exam
     */

    class Calculator {

        /**
         * Adds two given numbers
         * 
         * @param int $addend1
         * @param int $addend2
         * @return int $sum
         */
        function addition($addend1, $addend2) {
            $sum = $addend1+$addend2;
            return $sum;
        }

        /**
         * Subtracts two given numbers
         * 
         * @param int $minuend The first number in subtraction
         * @param int $subtrahend The second number in subtraction
         * @return int $difference
         */
        function subtraction($minuend, $subtrahend) {
            $difference = $minuend-$subtrahend;
            return $difference;
        }

        /**
         * Multiplies two given numbers
         * 
         * @param int $multiplicand The first number in multiplication
         * @param int $multiplier The second number in multiplication
         * @return int $product
         */
        function multiplication($multiplicand, $multiplier) {
            $product = $multiplicand*$multiplier;
            return $product;
        }

        /**
         * Divides two given numbers
         * 
         * @param int $dividend The first number in division
         * @param int $divisor The second number in division
         * @return int $quotient
         */
        function division($dividend, $divisor) {
            $quotient = $dividend/$divisor;
            return $quotient;
        }
    }

?>