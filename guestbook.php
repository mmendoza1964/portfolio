<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Guestbook</title>

    <!-- Insert Favicon -->
    <link href="images/emoji-4.png" type="image/png" rel="icon">
    <?php
        include('includes/portfolioNav.html');
    ?>
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

        <form id="submit" action="thankyou.php" method="post"><!--Form Start-->
            <fieldset class="form-group border p-2">
                <legend>Contact Info</legend>
                <div class="form-group d-inline-block col-5">
                    <label for="fname">First Name:</label>
                    <span class="err" id="err-fname">Required*</span>
                    <input type="text" class="form-control" id="fname"
                           placeholder="Enter first name" name="fname">
                </div>
                <div class="form-group d-inline-block col-5">
                    <label for="lname">Last Name:</label>
                    <span class="err" id="err-lname">Required*</span>
                    <input type="text" class="form-control" id="lname"
                           placeholder="Enter last name" name="lname">
                </div>
                <div class="form-group d-inline-block col-5">
                    <label for="job">Job Title:</label>
                    <input type="text" class="form-control" id="job"
                           placeholder="Enter job title" name="job">
                </div>
                <div class="form-group d-inline-block col-5">
                    <label for="company">Company Name:</label>
                    <input type="text" class="form-control" id="company"
                           placeholder="Enter company name" name="company">
                </div>
                <div class="form-group">
                    <label for="linkedin">LinkedIn url:</label>
                    <span class="err" id="err-linkedin">Required*</span>
                    <input type="text" class="form-control" id="linkedin"
                           placeholder="Enter linkedin url" name="linkedin">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email"
                           placeholder="Enter email" name="email">
                </div>
                <span class="err" id="err-email">
                    Please enter valid email address
                </span>
            </fieldset>

            <fieldset class="form-group border p-2">
                <legend>How we met</legend>
                <div class="form-group"><!--How we met start-->
                    <label for="howmet">How did meet?</label>
                    <span class="err" id="err-met">Required*</span>
                    <select id="howmet" class="form-control" name="howmet">
                        <option value="specify" selected>Please specify</option>
                        <option value="meetup">Meetup</option>
                        <option value="jobfair">Job Fair</option>
                        <option value="game">Gaming</option>
                        <option value="notmet">We haven't met yet</option>
                        <option value="other">Other (please specify below)</option>
                    </select>
                </div><!--how we met end-->

                <div class="form-group">
                    <label for="other">Other (please specify):</label>
                    <input type="text" class="form-control" id="other"
                           placeholder="Enter how we met" name="other">
                </div>
                <div class="form-group">
                    <label for="message">Message or greeting:</label>
                    <input type="text" class="form-control" id="message"
                           placeholder="Enter message" name="message">
                </div>
            </fieldset>

            <fieldset class="form-group border p-2">
                <legend>Mailing List</legend>
                <div class="custom-control custom-checkbox"><!--Mail list checkbox start-->
                    <input class="custom-control-input" id="mail-list" name="mail-list" type="checkbox" value="mail-yes">
                    <label class="custom-control-label" for="mail-list">Please add me to your mailing list</label>
                </div><br><!--Mail list checkbox end-->

                <div class="form-group">
                    <label class="d-block">Choose an email format</label>

                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="email-html" name="email-type" value="html" checked>
                        <label class="custom-control-label" for="email-html">HTML</label>
                    </div>

                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="email-text" name="email-type" value="text">
                        <label class="custom-control-label" for="email-text">Text</label>
                    </div>
                </div>
            </fieldset>

            <button class="btn btn-primary" type="submit">Submit</button>
        </form><!--form end-->

    </div><!--Main End-->
<script src="scripts/guestbook.js"></script>
</body>
</html>