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
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <title>Admin Page</title>

    <!-- Insert Favicon -->
    <link href="images/emoji-4.png" type="image/png" rel="icon">

    <?php
        include('includes/portfolioNav.html');
    ?>
</head>
<body class="pt-5">
        <?php
            $sql = "SELECT * FROM guestbook";

            //2. Send the query to db
            $result = mysqli_query($cnxn, $sql);
            if (mysqli_num_rows($result) == 0) {
                echo "<h2>No results found</h2>";
            }


            echo "<table class='pb-5 table-responsive' id='results'>
                    <thead>
                        <tr>
                            <td class='d-flex'>First</td>
                            <td>Last</td>
                            <td>Job Title</td>
                            <td>Company</td>
                            <td>Linkedin URL</td>
                            <td>Email</td>
                            <td>How We Met</td>
                            <td>Message</td>
                            <td>MailList Status</td>
                            <td>Mail Format</td>
                            <td>Date Submitted</td>
                        </tr>
                    </thead>";
            foreach ($result as $row) {
                //
                $first = $row['first'];
                $last = $row['last'];
                $job = $row['job'];
                $company = $row['company'];
                $linkedin = $row['linkedin'];
                $email = $row['email'];
                $metMethod = $row['metMethod'];
                $message = $row['message'];
                $mailList = $row['mailList'];
                $mailFormat = $row['mailFormat'];
                $dateSubmit = $row['dateSubmit'];

                //
                echo "<tr>
                        <td>$first</td>
                        <td>$last</td>
                        <td>$job</td>
                        <td>$company</td>
                        <td>$linkedin</td>
                        <td>$email</td>
                        <td>$metMethod</td>
                        <td>$message</td>
                        <td>$mailList</td>
                        <td>$mailFormat</td>
                        <td>$dateSubmit</td>
                      </tr>
                ";
            }
            echo "</table>";

        ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
            $('#results').DataTable();
        } );
    </script>
</body>
