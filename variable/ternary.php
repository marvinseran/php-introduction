<form method="get" action="">
    <label for="gender">
        <input value="Male" type="radio" name="gender">Male
        <input value="Female" type="radio" name="gender">Female
    </label>
    <input type="submit" name="submit" value="Submit">
</form>

<?php 
    if (isset($_GET['gender'])) {
        $gender = $_GET['gender'];
    }
    $is_gender = ($gender == "Male") ? "Hello sir" : "Hello miss";
    echo $is_gender;
?>