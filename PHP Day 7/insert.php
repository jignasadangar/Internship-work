<?php
   
    $connection = mysqli_connect("localhost", "root","" ,"db_internship");
    if($_POST){
        $name = $_POST["txt1"];
        $gender = $_POST["txt2"];
        $mobile = $_POST["txt3"];
        
        $q = mysqli_query($connection,  "insert into user_table(user_name,user_gender,user_mobile) values('{$name}','{$gender}','{$mobile}')") 
            or die("Error". mysqli_error($connection));
        if($q){
            echo"<script>alert('Record inserted');</script>";
        }
    }

?>
<html>
    <body>
        <form method="post">
            Name: <input type="text" name="txt1"/>
            Gender:<select name="txt2">
                <option>Male</option>
                <option>Female</option>

            </select>
            Mobile no: <input type="number" name="txt3"/>
                              <input type="submit"/>
        </form>
    </body>
</html>

 <a href ="table.php">Display record</a>