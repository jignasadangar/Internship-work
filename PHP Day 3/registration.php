<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Post method</title>
    <style>
        h1{
            text-align:center;
            color:white;
        }
        form{
            width:280px;
            margin:10px 35%;
            background:lightgrey;
            padding:20px;
            border:2px solid black;
            border-radius:20px;
        }
        body{
            background:grey;
        }


    </style>
</head>
<body>
    <h1>Registration</h1>
	<form action="registration_process.php" method="post">
        
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
                <td>email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Mobile Number</td>
                <td><input type="number" name="mobile"></td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td><input type="date" name="dob"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="uname"></td>
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