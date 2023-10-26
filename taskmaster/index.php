<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php 
    $conn = mysqli_connect("localhost","root","","crud") or die("connect faild");
    $sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass=studentclass.cid";
    $result= mysqli_query($conn,$sql) or die("Query Unsuccessful.");
    if(mysqli_num_rows($result)>0){
        
    
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Task Name</th>
        <th>Description</th>
        <th>Class</th>
        <th>Priority level</th>
        <th>Action</th>
        </thead>
        <tbody>
            
           <?php while($row=mysqli_fetch_assoc($result)){
                
            
            ?>
            <tr>
                <td><?php echo $row['tid']; ?></td>
                <td><?php echo $row["task_name"]; ?></td>
                <td><?php echo $row["description"]; ?></td>
                <td><?php echo $row["cname"]; ?></td>
                <td><?php echo $row["p_lavel"]; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['tid']; ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['tid']; ?>'>Delete</a>
                </td>
            </tr>
            <?php
            }
            ?>
            
        </tbody>
    </table>
    <?php } ?>
</div>
</div>
</body>
</html>
