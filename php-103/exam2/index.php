<?php


    /**
     * Imperial English Calculation of BMI (Body Mass Index)
     * 
     * @param float $heightInches, float $weightPounds
     */
    function calculate_bmi_english($heightInches, $weightPounds) {

        $index = 0;

        if ($heightInches != 0 && $weightPounds != 0) // Check if height and weight values are present.
            $index = round($weightPounds / ($heightInches * $heightInches) * 703, 2); // Calculate BMI. [Formula: weight (lbs) / height (in²) * 703]

        $bmi = "";

        if ($index < 18.5) {
            $bmi = "Underweight - BMI: " . $index;
        } else if ($index < 25) {
            $bmi = "Normal - BMI: " . $index;
        } else if ($index < 30) {
            $bmi = "Overweight - BMI: " . $index;
        } else {
            $bmi = "Obese - BMI: " . $index;
        }

        echo $bmi; // Display calculated BMI
    }

    calculate_bmi_english(69, 150);

?>