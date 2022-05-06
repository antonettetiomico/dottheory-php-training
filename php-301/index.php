<?php
// $email = 'tonettetotpanget@gmail.com';
// $subject = 'This is a test';
// $message = 'This is an email test #2';
// $headers = 'From: noreply@company.com';

// try {
//     mail($email, $subject, $message, $headers);
//     echo "DONE!";
// } catch (Exception $ex) {
//     echo $ex->getMessage();
// }

?>

<html>
    <head>
        <title>
            PHP 301 Mail Function: Practical Exam
        </title>
    </head>

    <body>
        <form method="POST">
        <h2>SEND EMAIL FORM</h2><br>
        <label for="to">TO:</label><br>
        <input type="text" name="to" required><br><br>

        <label for="subject">SUBJECT:</label><br>
        <input type="text" name="subject" required><br><br>

        <label for="message">MESSAGE:</label><br>
        <textarea name="message" rows="8" cols="30" required></textarea><br><br><br>

        <input type="submit" name="send" value="Send Email">
        </form>
    </body>
</html>

<?php
    if(isset($_POST['send'])) {

        $to = filter_input(INPUT_POST, "to", FILTER_VALIDATE_EMAIL);
        $subject = filter_input(INPUT_POST, "subject", FILTER_DEFAULT);
        $message = filter_input(INPUT_POST, "message", FILTER_DEFAULT);
        
        if(!$to) {
            echo "<p style='color:#ff0000;'>Your email was not sent.<br>Email address is invalid. Please try again.</p>";
        } else {
            mail($to, $subject, $message);
            echo "<p style='color:#008000;'>Your email was successfully sent.</p>";
        }
    }
?>