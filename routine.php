<?php
$conn = mysqli_connect("localhost", "root", "", "teacher");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$result = mysqli_query($conn, "SELECT * FROM routine ORDER BY FIELD(day,'Monday','Tuesday','Wednesday','Thursday','Friday','Saturday')");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Routine</title>
    <style>
        table { border-collapse: collapse; width: 70%; }
        th, td { border: 1px solid #000; padding: 8px 12px; text-align: left; }
        th { background-color: #ddd; }
    </style>
</head>
<body>

<h2>Class Routine</h2>

<table>
    <tr>
        <th>Day</th>
        <th>Time Slot</th>
        <th>Course</th>
        <th>Teacher</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['day']; ?></td>
        <td><?php echo $row['time_slot']; ?></td>
        <td><?php echo $row['course']; ?></td>
        <td><?php echo $row['teacher']; ?></td>
    </tr>
    <?php } ?>
</table>

</body>
</html>