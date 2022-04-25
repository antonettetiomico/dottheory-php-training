<?php

    /**
     * PHP 207 - File() Functions Practical Exam
     */

    $fileName = "read.txt";
    $fileContent = "";
    $fileAddSentence = "\nPrepare for the new King.";

    // Check if file exists
    if(file_exists($fileName)) {

        // Get current content
        $fileContent = file_get_contents($fileName);

        // Check if the sentence already exists on the file
        // if not, add the sentence
        if(str_contains($fileContent, $fileAddSentence) == 0) {
            $fileOpen = fopen($fileName, 'a+');
            fwrite($fileOpen, $fileAddSentence);
            fclose($fileOpen);
        }

        // Get updated content
        $fileContent = file_get_contents($fileName);

        echo $fileContent;

    } else {

        echo "File does not exist.";
    }

?>