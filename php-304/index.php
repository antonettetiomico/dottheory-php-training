<?php

    /**
     * PHP-304 Date Functions: Practical Exam
     */

     // Display copyright information
     $currentYear = date("Y");
     print "<i>Display copyright information:</i><br>";
     print "&copy; $currentYear PHP Training - C&T<br><br>";

     // Birthday countdown
     print "<i>Birthday countdown:</i><br>";
     $birthdate = new DateTime("01/22/2023");
     $now = new DateTime(date("m-d-Y"));

     $countdown = $birthdate->diff($now);
     print "<b>Day today:</b> " . $now->format("Y-m-d") . "<br><b>My next birthday:</b> " . $birthdate->format("Y-m-d") . "<br>";
     print "<b>Days until my birthday:</b> " . $countdown->days . "<br><br>";

     // Calculate difference between two dates
     print "<i>Calculate difference between two dates:</i><br>";
     $date1 = new DateTime("09/01/1933");
     $date2 = new DateTime("09/01/2021");

     $difference = $date1->diff($date2);
     print "<b>Date #1:</b> " . $date1->format("M d, Y") . "<br><b>Date #2:</b> " . $date2->format("M d, Y") . "<br>";
     print $difference->format("%y years, %m month, %d days");
?>