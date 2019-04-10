<!-- submit_review.php, Handles the logic for submitting a review to the database.  -->

<?php
    // TODO: SUBMIT CLASS, DEPARTMENT, AND REVIEW TO DATABASE
    error_reporting(0);
    session_start();

    $mysqli = new mysqli('sql103.epizy.com', 'epiz_23744465', 'ZJjYMvI29', 'epiz_23744465_project');

    if ($mysqli->connect_errno) {
        echo "Could not connect to database \n";
        echo "Error: ". $mysqli->connect_error . "\n";
        exit;
    } else {
        if (isset($_POST['submit_review'])) {
            // TODO: CHANGE THESE QUERIES
            // $query = "SELECT username, password FROM login WHERE username = " . "'$username'";
        }
    }
?>

<html>
    <h1> submitting a review </h1>
</html>
