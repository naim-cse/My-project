<?php
$conn = mysqli_connect("localhost", "root", "", "teacher");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$result = mysqli_query($conn, "SELECT * FROM attendance");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Attendance</title>
    <style>
        table { border-collapse: collapse; width: 60%; }
        th, td { border: 1px solid #000; padding: 8px 12px; text-align: left; }
        th { background-color: #ddd; }
    </style>
</head>
<body>

<h2>Attendance Records</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Student ID</th>
        <th>Date</th>
        <th>Status</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['attendance_id']; ?></td>
        <td><?php echo $row['student_id']; ?></td>
        <td><?php echo $row['date']; ?></td>
        <td><?php echo $row['status']; ?></td>
    </tr>
    <?php } ?>
</table>

</body>
</html>