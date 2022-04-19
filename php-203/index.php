<?php

    /**
     * PHP-203 Practical Exam
     * 
     * String Functions
     */

    $sentence1 = "The quick brown fox";
    $sentence2 = "The quick brown fox jumps over the lazy dog";
    $sentence3 = "2,543.12";

    // Get the first word of $sentence1
    $sentenceExplode1 = explode(" ", $sentence1);
    print "a. $sentenceExplode1[0]<br>";

    // Select the first 5 words from $sentence2
    $sentenceExplode2 = explode(" ", $sentence2);
    print "b. $sentenceExplode2[0] $sentenceExplode2[1] $sentenceExplode2[2] $sentenceExplode2[3] $sentenceExplode2[4]<br>";

    // Remove comma from $sentence3
    print "c. " . str_replace(",", "", $sentence3);
?>