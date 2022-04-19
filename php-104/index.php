<?php

    $shoe_brands = array("Nike", "Adidas", "Puma", "Converse");

    $nba_players = array("Lebron James" => "Lakers",
                        "Derrick Rose" => "Knicks",
                        "Steph Curry"  => "Warriors");

    $fastfood_chains = array("Jollibee"     => ["12", "15", "50"],
                            "Mcdonald's"   => ["18", "10", "70"],
                            "KFC"          => ["8", "9", "40"]);

    
    // list_shoe_brands($shoe_brands);
    print_r($shoe_brands);
    print "<br>Output the 3rd brand <br>" . "Result: " . $shoe_brands[2] . "<br><br><br>";
    
    // list_nbaplayers_teams($nba_players);
    print_r($nba_players);
    print "<br>Output the team of Steph Curry <br>" . "Result: " . $nba_players["Steph Curry"] . "<br><br><br>"; 

    // list_fastfood_chains($fastfood_chains);
    print_r($fastfood_chains);
    leastMgr_mostEmp($fastfood_chains);

    /**
     * Numeric/Indexed Arrays for Shoe Brands
     * 
     * @param array $shoebrands_list
     */
    function list_shoe_brands($shoebrands_list) {

        // Display each shoe brand on the list
        foreach($shoebrands_list as $shoebrand) {
            print $shoebrand . "<br>";
        }
    }

    /**
     * Associate Array for NBA Players and their teams
     * 
     * @param array $nbaplayers_list
     */
    function list_nbaplayers_teams($nbaplayers_list) {

        // Display each NBA Player and the team they belong
        foreach($nbaplayers_list as $nbaplayer => $team) {
            print $nbaplayer . " - " . $team . "<br>";
        }
    }

    /**
     * Multidimensional Array for fast food chains
     * 
     * @param array $foodchains_list
     */
    function list_fastfood_chains($foodchains_list) {

        // Display food chains and their data
        foreach($foodchains_list as $foodchain => $info) {

            print $foodchain . "<br>" . "- Branches: " . $info[0] . "<br>- Managers: " . $info[1] . "<br>- Employees: " . $info[2] . "<br>";
        } 
    }

    /**
     * Output the Fastfood Chains which contains the least Managers and the Most Employees
     * 
     * @param array $foodchains_list
     */
    function leastMgr_mostEmp($foodchains_list) {

        $leastMgr = ""; $mostEmp = ""; $leastMgrCnt = 0; $mostEmpCnt = 0;
        $initialized = false;

        foreach($foodchains_list as $foodchain => $info) {

            if ($initialized == false) {
                $leastMgrCnt = $info[1];
                $mostEmpCnt = $info[2];
                $initialized = true;
            }

            if($info[1] < $leastMgrCnt) {
                $leastMgrCnt = $info[1];
                $leastMgr = $foodchain;
            }

            if($info[2] > $mostEmpCnt){
                $mostEmpCnt = $info[2];
                $mostEmp = $foodchain;
            }
        }

        print "<br>Output the Chains that have the least Managers and the most Employees <br>Least Managers: " . $leastMgr . "<br>Most Employees: " . $mostEmp;
    }
?>