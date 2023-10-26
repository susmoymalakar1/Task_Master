<?php include 'header.php'; 

if(isset($_POST['deletebtn'])){

$stu_id=$_POST['tid'];

$conn = mysqli_connect("localhost","root","","crud") or die("connect faild");
$sql = "DELETE FROM student WHERE tid={$stu_id}";
$result= mysqli_query($conn,$sql) or die("Query Unsuccessful.");
header("Location: http://localhost/crud/crud_html/index.php");
mysqli_close($conn);

}

?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="tid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
