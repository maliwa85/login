<?php
session_start();

include("connection.php");
include("function.php");

$user_data = check_login($con);


?>

<html>
    <head>
        <title>
            My Website
        </title>
    </head>
    <body>
        <a href="logout.php">LOGOUT</a>
        <h2>This is an Index Page</h2>
        <br>
        Hello, Username.
    </body>
</html>