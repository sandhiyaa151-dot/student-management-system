<?php
include("connect.php");

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
</head>
<body>

<h2>Students List</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th> 
</tr>

<?php
while($row = mysqli_fetch_assoc($result)){
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
</tr>
<td>
    <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
    <a href="edit_student.php?id=<?php echo $row['id']; ?>">Edit</a>
</td>
<?php
}
?>

</table>

</body>
</html>