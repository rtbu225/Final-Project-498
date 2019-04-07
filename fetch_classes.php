<!--fetch_classes.php: requires home.php (the main page) to be accessible. 
 -                      gets the information for a given class. 
                        Values are hardcoded right now, but in the end will be populated by input from the DB -->

<?php
    require "home.php";
?>

<html>
    <!-- TODO: FETCH DEPARTMENT CLASSES FROM DB, PUT THEM IN DROPDOWN -->
    <a> classes: <a>
    <form action="classes.php" method="get">
        <select>
            <!-- hard-coded values for now -->
            <option value="Computer Science">Computer Science</option>
            <option value="Accounting">Accounting</option>
            <option value="Economics">Economics</option>
        </select>
    </form>
</html>
