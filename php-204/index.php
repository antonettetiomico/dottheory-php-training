<?php

    /**
     * PHP-204 Practical Exam
     * 
     * Functions
     */

    $word = "madame";

    print "Given String: $word <br>Result: ";
    is_palindrome($word);

    /**
     * Check if the given string is a Palindrome
     * 
     * @param string $palindrome
     */
    function is_palindrome($palindrome) {

        $reversed = "";

        // Reverse the passed string $palindrome
        for($p = strlen($palindrome) - 1; $p >= 0; $p--) {
            $reversed .= $palindrome[$p];
        }

        // Compare the two strings return 1 if palindrome and 0 if not
        if(strcmp($palindrome, $reversed) == 0)
            print 1;

        else
            print 0;

    }

?>