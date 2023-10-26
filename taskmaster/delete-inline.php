<?php

$stu_id=$_GET['id'];

$conn = mysqli_connect("localhost","root","","crud") or die("connect faild");
$sql = "DELETE FROM student WHERE tid={$stu_id}";
$result= mysqli_query($conn,$sql) or die("Query Unsuccessful.");
header("Location: http://localhost/crud/crud_html/index.php");
mysqli_close($conn);

?>