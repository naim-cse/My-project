<?php
include "db.php";
$result = mysqli_query($conn, "SELECT * FROM courses");
?>

<h2>View Courses</h2>
<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Credit</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?= $row['course_id'] ?></td>
    <td><?= $row['course_name'] ?></td>
    <td><?= $row['credit'] ?></td>
</tr>
<?php } ?>
</table>