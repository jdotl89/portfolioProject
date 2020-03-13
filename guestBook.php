<?php
//echo "<pre>";
//var_dump($_SERVER);
//echo "</pre>";
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

/*//If not logged in
require 'guestCheckLogin.php';*/
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/guestBook.css">
    <link rel="icon" type="image/png" href="images/gB.png">
    <title>GuestBook</title>

</head>

<body>

<div class="container bg-white" id="main">
    <?php
    include 'guestNav.php';
    //var_dump($_SESSION);
    ?>

    <div class="jumbotron pt-1">
        <h1 class="display-4"><img class="img-fluid" src="images/guestBook.png" alt="logo"></h1>
        <p class="lead">Sign My Guestbook!</p>
        <hr class="my-4">
        <p>Communication made easy through the world wide web! Let us stay connected by signing up now!</p>
    </div>

    <form id="guestBookForm" action="thankYou.php" method="post">

        <div class="row"><!-- start of row-->

            <div class="col-md-6"> <!-- 1 column-->

                <!-- Contact Information -->
                <fieldset class="form-group">

                    <legend>Contact Info: </legend>

                    <div class="form-group"><!-- first name-->
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName">
                        <span class="err" id="errFname">*Required</span>
                    </div>

                    <div class="form-group"><!-- last name-->
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName">
                        <span class="err" id="errLname">*Required</span>
                    </div>

                    <div class="form-group"><!-- job title-->
                        <label for="jobTitle">Job Title</label>
                        <input type="text" class="form-control" id="jobTitle" name="jobTitle">
                        <span class="err" id="errJob">Please enter a job title</span>
                    </div>

                    <div class="form-group"><!-- company-->
                        <label for="company">Company</label>
                        <input type="text" class="form-control" id="company" name="company">
                        <span class="err" id="errCompany">Please enter a Company</span>
                    </div>

                    <div class="form-group"><!--LinkedIn Url-->
                        <label for="linkedIn">LinkedIn URL</label>
                        <input type="text" class="form-control" id="linkedIn" name="linkedIn">
                        <span class="err" id="errLinked">*start with "http" & includes ".com"</span>
                    </div>

                    <div class="form-group"><!-- email-->
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" name="email">
                        <span class="err" id="errEmail">*Required</span>
                    </div>

                </fieldset>

            </div>

            <div class="col-md-6"> <!-- 2 column-->

                <!-- how we met -->
                <fieldset class="form-group">

                    <legend>How We Met: </legend>

                    <div class="form-group"><!-- how did we meet-->
                        <label class="form-check-label" for="how">How Did We Meet?</label>
                        <select class="form-control" id="how" name="how">
                            <option value="none">Select</option>
                            <option value="meetup">MeetUp</option>
                            <option value="jobfair">Job Fair</option>
                            <option value="wehaventmet">We haven't met</option>
                            <option value="other">Other</option>
                        </select>
                        <span class="err" id="errHow">*Required</span>
                    </div>

                    <div class="form-group" id="otherOption"><!-- other-->
                        <input type="text" class="form-control" id="other" name="other" placeholder="Please specify">
                        <span class="err" id="errOther">*Required</span>
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="3" name="message"></textarea>
                        <span class="err" id="errMessage">Please enter a Message</span>
                    </div>

                </fieldset>

                <!-- mailing list-->
                <fieldset class="form-group">

                    <legend>Mailing List: </legend>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="mail" name="mail">
                        <label class="form-check-label" for="mail">Please add me to your mailing list</label>
                    </div>

                    <div class="form-group" id="htmlblock">
                        <input class="form-check-label" type="radio" name="method" id="html" value="html">
                        <label class="form-check-label" for="html">HTML</label>
                    </div>

                    <div class="form-group" id="textblock">
                        <input class="form-check-label" type="radio" name="method" id="text" value="text" >
                        <label class="form-check-label" for="text">Text</label>
                    </div>

                </fieldset>

                <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div><!-- row closing-->

    </form><!-- closing form-->

<?php //require 'guestHeader.php';?>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="scripts/guestBook.js"></script>

</body>
