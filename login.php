<?php 
session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Retrieve the posted data
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password)) {

        $query = "SELECT * FROM users WHERE user_name='$user_name' LIMIT 1";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            
            if ($user['password'] === $password) {
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['user_name'] = $user['user_name'];

                header("Location: home.html");
                die;
            } else {
                echo "Incorrect password!";
            }
        } else {
            echo "No user found with that username!";
        }
    } else {
        echo "Please enter both username and password!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="box">
        <form method="post">
            <h2>Login</h2>
            <input id="text" type="text" name="user_name" placeholder="Enter User Name" required>
            <input id="text" type="password" name="password" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            <input id="button" type="submit" value="Login">
            <a href="signup.php">Click to Signup</a>
        </form>
    </div>
</body>
</html>
