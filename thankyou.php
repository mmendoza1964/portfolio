<?php

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Connect to database
require ($_SERVER['DOCUMENT_ROOT'].'/../connect.php');
$cnxn = connect();

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Thank You</title>

    <!-- Insert Favicon -->
    <link href="images/emoji-4.png" type="image/png" rel="icon">
</head>
<body>
<div id="main" class="border border-secondary bg-light col-lg-8 col-md-10 col-sm-12 m-auto text-eli">
    <div class="jumbotron">
        <h2 class="center">Mark Mendoza</h2>
        <h5 class="center">Nice to see you again! Please enter the information below to get in contact.</h5>
        <div class="m-auto" id="face">
            <img class="m-top-2" src="images/maaku%20smol.jpg" alt="mark's face with glasses">
        </div>
    </div><!--Jumbotron end-->

    <h2 class="center">Form submitted!</h2>

    <?php

    var_dump($_POST);

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $job = $_POST['job'];
    $company = $_POST['company'];
    $linkedin = $_POST['linkedin'];
    $email = $_POST['email'];
    $howmet = $_POST['howmet'];
    $message = $_POST['message'];

    if (isset($_POST['mail-list']) && ($_POST['mail-list'] === true)) {
        $mailList = 'TRUE';
    } else {
        $mailList = 'FALSE';
    }

    $mailFormat = $_POST['email-type'];
    $dateSubmit = 'CURRENT_TIMESTAMP';

    $sql = "INSERT INTO guestbook VALUES ('$fname', '$lname', '$job', '$company', '$linkedin',
            '$email', '$howmet', '$message', $mailList, '$mailFormat', $dateSubmit)";

    echo "<p>$sql</p>";
    mysqli_query($cnxn, $sql);
    ?>

</div><!--Main End-->
</body>
</html>