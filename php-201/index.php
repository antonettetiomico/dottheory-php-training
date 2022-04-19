<?php

    /**
     * PHP-201 Practical Exam
     * 
     * Conditional Statements
     */

    $age = 19;
    $countryWork = ""; $countryVacay = "";

    if($age >= 15 && $age <= 18) {

        $countryWork = "Singapore";

    } elseif ($age == 19) {

        $countryWork = "United Kingdom";

    } elseif ($age >= 20 && $age <= 23) {

        $countryWork = "Canada";

    }

    switch ($countryWork) {
        
        case "Singapore";
            $countryVacay = "France";
            break;

        case "United Kingdom";
            $countryVacay = "USA";
            break;

        case "Canada";
            $countryVacay = "Philippines";
            break;
    }

    print "Country: " . $countryWork . "<br>Vacation: " . $countryVacay;

?>