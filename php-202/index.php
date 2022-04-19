<?php

    /**
     * PHP202 Practical Exam
     * 
     * Iterative Statements
     */

     // For Loop
     print "For Loop<br>";
     for($f = 1; $f < 11; $f++) {

        print "The quick brown fox jumps over a lazy dog";

        if($f == 5)
            print " but the dog woke up and barked at the fox";

        print "<br>";

     }

     // While Loop
     print "<br>While Loop<br>";
     $w = 1;
     while($w < 11) {

        print "The quick brown fox jumps over a lazy dog";

        if($w == 5)
            print " but the dog woke up and barked at the fox";

        print "<br>";

        $w++;

     }

     // Do ... While Loop
     print "<br>Do ... While Loop<br>";
     $d = 1;
     do {

        print "The quick brown fox jumps over a lazy dog";

        if($d == 5)
            print " but the dog woke up and barked at the fox";


        print "<br>";
        
        $d++;

     } while($d < 11);

?>