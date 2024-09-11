<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_id = $_POST['user_id'];
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];
		$contact = $_POST['contact'];
		

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			$user_id = random_num(5);
			$query = "insert into users (user_id,user_name,password,gender,contact) values ('$user_id','$user_name','$password','$gender','$contact')";

			mysqli_query($con,$query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="box">
        <form method="post">
            <h2>Signup</h2>
            <input id="text" type="text" name="user_name" placeholder="Enter Your Name" required>
            <input id="text" type="password" name="password" placeholder="Create a Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            
            <label class="form-label">Gender:</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="Female" value="Female" required>
                <label class="form-check-label" for="Female">Female</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="Male" value="Male" required>
                <label class="form-check-label" for="Male">Male</label>
            </div>
            
            <input id="number" type="text" name="contact" placeholder="Enter Your Contact Number" pattern="[1-9]{1}[0-9]{9}" maxlength="10" required>
            
            <input id="button" type="submit" value="Signup">
            <a href="login.php">Click to Login</a>
        </form>
    </div>
</body>
</html>
