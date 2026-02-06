<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "teacher");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Form submit handling
if (isset($_POST['submit'])) {
    $teacher_id = $_POST['teacher_id'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];

    // Insert into database
    $sql = "INSERT INTO teacher (teacher_id, name, subject) VALUES ('$teacher_id', '$name', '$subject')";

    if (mysqli_query($conn, $sql)) {
        $msg = "Teacher added successfully!";
    } else {
        $msg = "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Teacher</title>
</head>
<body>

<h2>Add Teacher</h2>

<?php if (isset($msg)) { echo "<p>$msg</p>"; } ?>

<form method="POST" action="">
    <label>Teacher ID:</label><br>
    <input type="number" name="teacher_id" required><br><br>

    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Subject:</label><br>
    <input type="text" name="subject" required><br><br>

    <input type="submit" name="submit" value="Add Teacher">
</form>

</body>
</html>