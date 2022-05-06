<?php

    /**
     * Countries which colonized the PH
     */
    class CountryColonization {
        public $name;
        public $description;
        public $startDate;
        public $endDate;

        public function __construct($name, $description, $startDate, $endDate) {
            $this->name = $name;
            $this->description = $description;
            $this->startDate = $startDate;
            $this->endDate = $endDate;
        }

        private function get_name() {
            return $this->name;
        }

        private function set_name($name) {
            $this->name = $name;
        }

        private function get_desc() {
            return $this->description;
        }

        private function set_desc($description) {
            $this->description = $description;
        }

        private function get_startDate() {
            return $this->startDate;
        }

        private function set_startDate($startDate) {
            $this->startDate = $startDate;
        }

        private function get_endDate() {
            return $this->endDate;
        }

        private function set_endDate($endDate) {
            $this->endDate = $endDate;
        }

        function countYearsOfColonization() {
            $startDate = new DateTime($this->startDate);
            $endDate = new DateTime($this->endDate);

            $interval = $startDate->diff($endDate);
            return $interval->y;
        }
    }

    $spain = new CountryColonization("Spain", "The world's first global empire.", "02/13/1565", "06/12/1898");
    $america = new CountryColonization("America", "Has the largest economy in the world.", "12/21/1898", "07/04/1946");
    $japan = new CountryColonization("Japan", "This is where the world's oldest company is.", "12/08/1941", "07/05/1945");

    echo countryColonizationDetails($spain);
    echo countryColonizationDetails($america);
    echo countryColonizationDetails($japan);

    /**
     * Displays the details of the Country which colonized the PH
     * 
     * @param CountryColonization $country
     */
    function countryColonizationDetails(CountryColonization $country) {
        print "Name: " . $country->name;
        print "<br>Description: " . $country->description;
        print "<br>Start: " . $country->startDate;
        print "<br>End: " . $country->endDate;
        print "<br>Total Colonization years: " . $country->countYearsOfColonization();
        print "<br><br>";
    }
?>