<?php

    /**
     * Using Regular Expressions 
     */

    $matchSentence = "He was eating cake in the cafe";
    $matchWord = '/cake/';
    $replaceSentence = "Earth revolves around\nthe\tSun";
    $replacePattern = ['/\n/', '/\t/'];
    $replacement = ['-', '-'];
    $splitSentence = "My favourite colors are red, green and blue";
    $splitPattern = "/[,,, ]/";

    // Use preg_match()
    echo "Use preg_match():<br>";
    if(preg_match($matchWord, $matchSentence) == 1) {
        echo "There is <b>'cake'</b> in the sentence:<br>$matchSentence";
    } else {
        echo "There is no <b>'cake'</b> in the sentence:<br>$matchSentence";
    }

    // Use preg_replace()
    echo "<br><br>Use preg_replace():<br>";
    echo preg_replace($replacePattern, $replacement, $replaceSentence);

    // Use preg_split()
    echo "<br><br>Use preg_split():<br>";
    $resultArray = preg_split($splitPattern, $splitSentence);
    print_r($resultArray);
    
?>