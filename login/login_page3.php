<?php
     session_start();

     include("conn.php");

     if($_SERVER["REQUEST_METHOD"]=="POST"){
        $gmail = $_POST["username"];
        $password = $_POST["password"];

        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {
            $query = "select * from adminlogin where username ='$gmail' limit 1";
            $result = mysqli_query($conn,$query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data =mysqli_fetch_assoc($result);

                    if($user_data['password'] == $password)
                    {
                        header("location: hime.php");
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login_page3.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="Wrapper">
        <form  method="post">
            <h1>Login</h1><br>
            <h3>Happy to see you again!!</h3>
            <div class="input-box">
                <input  autocomplete="off" type="text" name="username" placeholder="Username" >
                <i class='bx bxs-user'></i>
                <div id="Username_error">Please enter correct your Username or phone</div>
            </div>
            <div class="input-box">
                <input type="Password" name="password" placeholder="Password">
                <i class='bx bxs-lock-alt'></i>
                <div id="pass_error">Please fill up your Password</div>
            </div>  
            <div class="remember-forgot">
                <label><input type="checkbox">remember me</label>
                <a href="#">Forgot Password?</a>
            </div>

          <button type="submit" class="btn">login</button>
          
        </form> 
    </div>               

<script src="vaild.js"></script>
</body>
</html>