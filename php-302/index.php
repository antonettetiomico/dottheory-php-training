<?php

    /**
     * PHP 302 - MySQLi Functions: Practical Exam
     */

    // Variables
    $host = "localhost";
    $dbname = "php_training";
    $username = "root";
    $password = "@dmin123";
    $tblname = "ph_heroes";
    $col_ID = "ID";
    $col_fName = "FirstName";
    $col_lName = "LastName";
    $col_birthPlace = "BirthPlace";
    $col_desc = "Description";

    try {
        // Connect to SQL
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        $sqlQuery = "SELECT * FROM $tblname";
        $result = $pdo->query($sqlQuery);

        // Store PDO objects to array
        $data = array();
        foreach($result as $row)
            $data[] = $row;
        
        // Display values
        for($ctr=0; $ctr<sizeof($data); $ctr++) {
            print "Philippine National Hero #" . $data[$ctr][$col_ID] . "<br>";
            print "<b>Name:</b> " . $data[$ctr][$col_fName] . " " . $data[$ctr][$col_lName] . "<br>\t";
            print "<b>Birthplace:</b> " . $data[$ctr][$col_birthPlace] . "<br>\t";
            print "<b>About:</b> " . $data[$ctr][$col_desc] . "<br><br>";
        }
    }

    catch(PDOException $msg) {
        print $msg->getMessage();
    }

?>