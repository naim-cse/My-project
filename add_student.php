<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Add Student</h2>
<form method="post">
    Name: <input type="text" name="name" required>
    Roll: <input type="text" name="roll" required>
    Department: <input type="text" name="department" required>
    <input type="submit" name="save" value="Save">
</form>

<?php
if(isset($_POST['save'])){
    $sql = "INSERT INTO students(name,roll,department)
            VALUES('$_POST[name]','$_POST[roll]','$_POST[department]')";
    mysqli_query($conn,$sql);
    echo "<p class='success'>Student Added Successfully</p>";
}
?>
</body>
</html>