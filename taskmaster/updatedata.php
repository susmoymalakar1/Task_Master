<?php
$stu_id=$_POST['tid'];
$stu_name= $_POST['task_name'];
$stu_address= $_POST['description'];
$stu_class= $_POST['sclass'];
$stu_phone= $_POST['p_lavel'];

$conn = mysqli_connect("localhost","root","","crud") or die("connect faild");
$sql = "UPDATE student SET task_name ='{$stu_name}',description ='{$stu_address}',sclass ='{$stu_class}',p_lavel ='{$stu_phone}' WHERE tid={$stu_id}";
$result= mysqli_query($conn,$sql) or die("Query Unsuccessful.");
header("Location: http://localhost/crud/crud_html/index.php");
mysqli_close($conn);



?>