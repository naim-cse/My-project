<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "teacher");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch all teachers
$result = mysqli_query($conn, "SELECT * FROM teacher");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Teachers</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #ddd;
        }
    </style>
</head>
<body>

<h2>Teacher List</h2>

<table>
    <tr>
        <th>Teacher ID</th>
        <th>Name</th>
        <th>Subject</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['teacher_id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['subject']; ?></td>
    </tr>
    <?php } ?>

</table>

</body>
</html>