<?php
     session_start();

     include("conn.php");

     if($_SERVER["REQUEST_METHOD"]=="POST"){
        $gmail = $_POST["email"];
        $password = $_POST["pass"];

        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {
            $query = "select * from login where email ='$gmail' limit 1";
            $result = mysqli_query($conn,$query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data =mysqli_fetch_assoc($result);

                    if($user_data['pass'] == $password)
                    {
                        header("location: home2.php");
                        die;

                    }
                }
            }
            echo "<script type='text/javascript'> alert('login Sucessfull')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('Wrong username or password Login Unsucessfull!')</script>";
        }
     }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Login and Register</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="image">
    <div class="login">
        <h1>Login</h1>
       
        <form method="POST">
            <label> Email </label>
            <input type="email" name="email" Required>
            <label> Password </label>
            <input type="password" name="pass" Required>
            <input type="Submit" name="" value="Submit">
       
        </form>
        <p>Not have an Account? <a href="signup.php">Sign Up here</a></p>
    </div>
</div>
</body>
</html>