<html>
    <head>
        <title>
            Forms - PHP Practical Exam
        </title>
    </head>

    <body>
        <form method="POST">
            <label for="firstName">First Name:</label><br>
            <input type="text" name="firstName"><br>

            <label for="lastName">Last Name:</label><br>
            <input type="text" name="lastName"><br>

            <label for="age">Age:</label><br>
            <input type="number" name="age"><br><br>

            <input type="submit" name="submit" value="Submit">
        </form>

        <?php
            // Check if the Submit button is clicked
            if(isset($_POST['submit'])) {
                // Retrieve values from POST method of HTML Form
                $firstName = strtoupper($_POST['firstName']);
                $lastName = strtoupper($_POST['lastName']);
                $age = $_POST["age"];
                $ageDesc = "";

                // Age conditions
                switch($age) {
                    case ($age>=1 && $age<=19):
                        $ageDesc = "<br>The person is a STUDENT";
                        break;
                    case ($age>=20 && $age<=25):
                        $ageDesc = "<br>The person is an EMPLOYEE";
                        break;
                    case ($age>=26 && $age<=30):
                        $ageDesc = "<br>Have a FAMILY";
                        break;
                    default:
                        $ageDesc = "<br>The person is AGELESS";
                        break;
                }

                print "First Name: $firstName<br>Last Name: $lastName<br>Age: $age<br>$ageDesc";
            }
        ?>
    </body>
</html>