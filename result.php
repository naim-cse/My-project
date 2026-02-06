<?php
include "db.php";

$result = mysqli_query($conn,
"SELECT s.name, c.course_name
 FROM enrollments e
 JOIN students s ON e.student_id = s.student_id
 JOIN courses c ON e.course_id = c.course_id"
);
?>

<h2>Result / Enrollment View</h2>

<table border="1">
<tr>
    <th>Student</th>
    <th>Course</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?= $row['name'] ?></td>
    <td><?= $row['course_name'] ?></td>
</tr>
<?php } ?>
</table>