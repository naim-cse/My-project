<?php
$conn = mysqli_connect("localhost", "root", "", "teacher");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $day = $_POST['day'];
    $time_slot = $_POST['time_slot'];
    $course = $_POST['course'];
    $teacher = $_POST['teacher'];

    $sql = "INSERT INTO routine (day, time_slot, course, teacher) VALUES ('$day', '$time_slot', '$course', '$teacher')";

    if (mysqli_query($conn, $sql)) {
        $msg = "Routine added successfully!";
    } else {
        $msg = "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Routine</title>
</head>
<body>

<h2>Add Class Routine</h2>

<?php if(isset($msg)) { echo "<p>$msg</p>"; } ?>

<form method="POST" action="">
    <label>Day:</label><br>
    <input type="text" name="day" required><br><br>

    <label>Time Slot:</label><br>
    <input type="text" name="time_slot" required><br><br>

    <label>Course:</label><br>
    <input type="text" name="course" required><br><br>

    <label>Teacher:</label><br>
    <input type="text" name="teacher" required><br><br>

    <input type="submit" name="submit" value="Add Routine">
</form>

</body>
</html>