<?php

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

//If not logged in
require 'guestCheckLogin.php';

//Connect to db
require('/home/jonlaygo/db.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="icon" type="image/png" href="images/gB.png">
    <title>GuestBook Admin</title>

</head>

<body>
<div class="container" id="main">
    <?php
    include 'guestNav.php';
    //var_dump($_SESSION);
    ?>

    <div class="jumbotron">
        <h1 class="display-4">guestBook Admin</h1>
        <p class="lead">Observe and collect, like one who studies science.</p>
        <hr class="my-4">
        <p>It hacks so good!</p>
    </div>
    <div class="row">
        <h3>GuestBook Summary</h3>

        <table id="guest-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Title</th>
                <th>Company</th>
                <th>Website</th>
                <th>Email</th>
                <th>How We Met</th>
                <th>Message</th>
                <th>Mailing List</th>
                <th>Method</th>
                <th>Date/Time</th>
            </tr>
            </thead>

            <?php

            //Define a query
            $sql = "SELECT * FROM guest";

            //Send the query to the db
            $result = mysqli_query($cnxn, $sql);
            //var_dump($result);

            //Process the result
            foreach ($result as $row) {
                //var_dump($row);

                $id = $row['id'];
                $first = $row['first'];
                $last = $row['last'];
                $title = $row['title'];
                $company = $row['company'];
                $url = $row['url'];
                $email = $row['email'];
                $how = $row['how'];
                $message = $row['message'];
                $mail = $row['mail'];
                $method = $row['method'];
                $date = $row['date'];

                echo "<tr>
                    <td>$id</td>
                    <td>$first $last</td>
                    <td>$title</td>
                    <td>$company</td>
                    <td>$url</td>
                    <td>$email</td>
                    <td>$how</td>
                    <td>$message</td>
                    <td>$mail</td>
                    <td>$method</td>
                    <td>$date</td>
                  </tr>";
            }

            ?>
        </table>


    </div>

    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">

            <div class="card text-center " style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Home</h5>
                    <p class="card-text">Lets hit the books!</p>
                    <a href="guestBook.php" class="btn btn-primary">Let's GO!</a>
                </div>

            </div>
        </div>

        <div class="col-md-4">

        </div>

    </div>


</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


<script>$('#guest-table').DataTable();</script>


</body>
</html>
