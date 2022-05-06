<?php

    // Create function with an exception
    function checkNum($number) {

        try {

            if($number>1) {
                throw new Exception("Value must be 1 or below");
            } else {
                echo "The value is $number";
            }

        } catch (Exception $ex) {
            echo "Message: " . $ex -> getMessage();
        }

    }

    // Trigger exception
    checkNum(2);

?>