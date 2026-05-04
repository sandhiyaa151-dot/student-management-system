<?php
include("connect.php");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO students (name, email) VALUES ('$name', '$email')";
    
    if(mysqli_query($conn, $sql)){
        echo "Student added ";
    } else {
        echo "Error";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>

<h2>Add Student</h2>

<form method="POST">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    
    <input type="submit" name="submit" value="Add Student">
</form>

</body>
</html>