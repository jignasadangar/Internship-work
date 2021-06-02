<?php
      $connection = mysqli_connect("localhost", "root","" ,"db_internship");
      if($_POST){
        $firstname = $_POST["fname"];
        $lastname = $_POST["lname"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $dob = $_POST["dob"];
        $mobile = $_POST["mobile"];
        $add = $_POST["address"];
        $bloodgroup = $_POST["bg"];
        $password = $_POST["pass"];
        
       $q = mysqli_query($connection,  "insert into tbl_student(st_fname,st_lname,st_email,st_gender,st_dob,st_mobile,st_address,st_bloodgroup,st_password)"
               . " values('{$firstname}','{$lastname}','{$email}','{$gender}','{$dob}','{$mobile}','{$add}','{$bloodgroup}','{$password}')") 
            or die("Error". mysqli_error($connection));
        if($q){
            echo"<script>alert('Record inserted');</script>";
        }
    }

    
?>
<html>
    <style>
        h1{
            text-align: center;
        }
        form{
            border: 1px solid black;
            width: 280px;
            margin: 0 36%;
            padding: 15px;
            background: lightblue;
            border-radius: 10px 
        }
        
    </style>
    <body>
         <h1>Registration</h1>
	<form  method="post">
        
        <table>
        <tr>
                <td>Firtsname</td>
                <td><input type="text" name="fname"></td>
            </tr>
            <tr>
                <td>Lastname</td>
                <td><input type="text" name="lname"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
             <tr>
                <td>Gender</td>
                <td><input type="radio" name="gender">Male<input type="radio" name="gender">Female</td>
                    
             </tr>
              <tr>
                <td>Date of Birth</td>
                <td><input type="date" name="dob"></td>
            </tr>
            <tr>
                <td>Mobile Number</td>
                <td><input  type="number" name="mobile"></td>
            </tr>
           
            <tr>
                <td>Address</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>Blood group</td>
                <td><input type="text" name="bg"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                <input type="password" name="pass">
                </td>
            </tr>
            <tr>
                <td> <input type="submit" name="" id=""></td>
               
                <td><input type="reset" name="" id=""></td>
            </tr>
        </table>
	
		
	</form>
    </body>
</html>