<?php
include "db.php";

if (isset($_POST['save'])) {
    $name = $_POST['course_name'];
    $credit = $_POST['credit'];

    mysqli_query($conn,
        "INSERT INTO courses (course_name, credit)
         VALUES ('$name', '$credit')"
    );
}
?>

<h2>Add Course</h2>
<form method="post">
    Course Name: <input type="text" name="course_name" required>
    Credit: <input type="number" name="credit" required>
    <button name="save">Save</button>
</form>