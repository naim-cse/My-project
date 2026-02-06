<?php
$conn = mysqli_connect("localhost", "root", "", "teacher");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $student_id = $_POST['student_id'];
    $date = $_POST['date'];
    $status = $_POST['status'];

    $sql = "INSERT INTO attendance (student_id, date, status) VALUES ('$student_id', '$date', '$status')";

    if (mysqli_query($conn, $sql)) {
        $msg = "Attendance recorded successfully!";
    } else {
        $msg = "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Attendance</title>
</head>
<body>

<h2>Add Attendance</h2>

<?php if(isset($msg)) { echo "<p>$msg</p>"; } ?>

<form method="POST" action="">
    <label>Student ID:</label><br>
    <input type="number" name="student_id" required><br><br>

    <label>Date:</label><br>
    <input type="date" name="date" required><br><br>

    <label>Status:</label><br>
    <select name="status" required>
        <option value="Present">Present</option>
        <option value="Absent">Absent</option>
    </select><br><br>

    <input type="submit" name="submit" value="Add Attendance">
</form>

</body>
</html>