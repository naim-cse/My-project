<?php
include "db.php";

$students = mysqli_query($conn, "SELECT * FROM students");
$courses  = mysqli_query($conn, "SELECT * FROM courses");

if (isset($_POST['enroll'])) {
    $sid = $_POST['student_id'];
    $cid = $_POST['course_id'];

    mysqli_query($conn,
        "INSERT INTO enrollments (student_id, course_id)
         VALUES ($sid, $cid)"
    );
}
?>

<h2>Enroll Student</h2>

<form method="post">
    Student:
    <select name="student_id">
        <?php while ($s = mysqli_fetch_assoc($students)) { ?>
            <option value="<?= $s['student_id'] ?>">
                <?= $s['name'] ?>
            </option>
        <?php } ?>
    </select>

    Course:
    <select name="course_id">
        <?php while ($c = mysqli_fetch_assoc($courses)) { ?>
            <option value="<?= $c['course_id'] ?>">
                <?= $c['course_name'] ?>
            </option>
        <?php } ?>
    </select>

    <button name="enroll">Enroll</button>
</form>