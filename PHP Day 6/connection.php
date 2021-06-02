<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "db_internship";
   
    $connection = mysqli_connect($host, $user, $password, $database);
    
    $q = mysqli_query($connection, 
            "insert into user_table(user_name,user_gender,user_mobile) values('khusi','Female',456788909)") 
            or die("Error". mysqli_error($connection));
    echo 'record inserted';
?>