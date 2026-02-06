<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Student List</h2>
<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Roll</th>
    <th>Department</th>
</tr>

<?php
$result = mysqli_query($conn,"SELECT * FROM students");
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>
        <td>{$row['student_id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['roll']}</td>
        <td>{$row['department']}</td>
    </tr>";
}
?>
</table>
</body>
</html>