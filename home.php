<!DOCTYPE html>
<!--home.php, the main php page and file for our program. Creates the DOM for rateMyClasses -->
<html>
    <!--Main header div. Should be displayed at the top of the page.-->
    <h1> Rate My Class </h1>
    <br> <br> <br> <br>
    <h3> Submit Review </h3>
    <!--Submit review div. Is linked to submit_review.php. Handles the logic for writing and submitting a review for a class. -->
    <div id="submit_review" name="submit_review">
        <form action='submit_review.php' method="get">
            <a> class: </a>
            <input type="text" id="class" name="class">
            <br>
            <a> department: <a>
            <input type="text" id="department" name="department">
            <br>
            <a> review: </a>
            <input type="text" id="review" name="review">
            <input type="submit" id="submit">
        </form>
    </div>

    <br> <br> <br> <br>

    <h3> Search Reviews for Specific Class </h3>
    <!-- search reviews div. Handles the logic for searching for a specific class' reviews. Linked to fetch_classes.php -->
    <div id="search_reviews" name="search_reviews">
        <form action="fetch_classes.php" method="get">
            <a> department name: </a>
            <input type="text" id="department_name" name="department_name">
            <input type="submit" id="department_submit" name="department_submit">
        </form>
    </div>
</html>
