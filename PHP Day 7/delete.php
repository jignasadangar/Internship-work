<?php
    $connection = mysqli_connect("localhost", "root", "", "db_internship");
    
    $id = $_GET['deleteid'];
    
    $q = mysqli_query($connection, "delete from user_table where user_id ='{$id}'") or die(mysqli_error($connection));
    
    echo"<script>alert('Record deleted');window.location = 'table.php'</script>";
?>