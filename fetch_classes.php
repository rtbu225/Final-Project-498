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