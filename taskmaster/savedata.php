<?php
$stu_name= $_POST['task_name'];
$stu_address= $_POST['description'];
$stu_class= $_POST['class'];
$stu_phone= $_POST['p_lavel'];

$conn = mysqli_connect("localhost","root","","crud") or die("connect faild");
$sql = "INSERT INTO student(task_name,description,sclass,p_lavel) VALUE( '{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
$result= mysqli_query($conn,$sql) or die("Query Unsuccessful.");
header("Location: http://localhost/crud/crud_html/index.php");
mysqli_close($conn);



?>