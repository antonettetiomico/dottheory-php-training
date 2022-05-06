<?php

    /**
     * PHP 402 XML: Practical Exam
     */

    // Variables
    $rootElement = "Students";

    $dom = new DOMDocument();
        $dom->encoding = 'utf-8';
        $dom->xmlVersion = '1.0';
        $dom->formatOutput = true;

    $xml_fileName = 'Students.xml';
    $root = $dom->createElement($rootElement);

    $dom->appendChild(addRecords($dom, $root, '2022-0001-05', 'Tohru Honda', 'Female', 'Neko'));
    $dom->appendChild(addRecords($dom, $root, '2022-0002-05', 'Kyo Sohma', 'Male', 'Neko'));
    $dom->appendChild(addRecords($dom, $root, '2022-0003-05', 'Yuki Sohma', 'Male', 'Nezumi'));

    $dom->save($xml_fileName);
    echo "<u>$xml_fileName</u> has been successfully created.<br><br>";

    loadXML($xml_fileName);

    /**
     * Add DOM Child Records
     * 
     * @param DOMDocument $dom
     * @param DOMElement $root
     * @param string $val_studentID
     * @param string $val_name
     * @param string $val_gender
     * @param string $val_section
     * @return DOMElement $root
     */
    function addRecords($dom, $root, $val_studentID, $val_name, $val_gender, $val_section) {
        $studentNodeName = "student";
        $attr_student_id = "student_id";
        $attr_name = "Name";
        $attr_gender = "Gender";
        $attr_section = "Section";

        $student_node = $dom->createElement($studentNodeName);
        $student_id = new DOMAttr($attr_student_id, $val_studentID);
        $student_node->setAttributeNode($student_id);
    
        $name = $dom->createElement($attr_name, $val_name);
            $student_node->appendChild($name);
        
        $gender = $dom->createElement($attr_gender, $val_gender);
            $student_node->appendChild($gender);
        
        $section = $dom->createElement($attr_section, $val_section);
            $student_node->appendChild($section);
    
        $root->appendChild($student_node);

        return $root;
    }

    /**
     * Load XML File
     * 
     * @param string $xml_fileName .xml file that will be loaded
     */
    function loadXML($xml_fileName) {
        $xml = simplexml_load_file($xml_fileName);

        print "<h3>STUDENT RECORDS</h3>";

        $list = $xml->student;

        for($ctr=0; $ctr<count($list); $ctr++) {
            print "<b>Student ID No.:</b> " . $list[$ctr]->attributes()->student_id . "<br>";
            print "<b>Name:</b> " . $list[$ctr]->Name . "<br>";
            print "<b>Gender:</b> " . $list[$ctr]->Gender . "<br>";
            print "<b>Section:</b> " . $list[$ctr]->Section . "<br><br>";
        }
    }

?>