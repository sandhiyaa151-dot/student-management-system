<?php
session_start();
if(!isset($_SESSION['user']))
    {
    header("Location:login.php");
    exit();
    }
?>
<h2>Welcome <?php echo $_SESSION['user']; ?> </h2>
<a href="add_student.php">➕ Add Student</a><br><br>
<a href="view_students.php">📋 View Students</a><br><br>
<a href="logout.php">🚪 Logout</a>

