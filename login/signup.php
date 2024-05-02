<?php
     session_start();

     include("conn.php");

     if($_SERVER["REQUEST_METHOD"]=="POST"){
       
        $firstname = $_POST["fname"];
        $lastname= $_POST["lname"];
        $Gender = $_POST["gender"];
        $num = $_POST["cnum"];
        $address = $_POST["address"];
        $gmail = $_POST["email"];
        $password = $_POST["pass"];

     
    if(!empty($gmail) && !empty($password) && !is_numeric($gmail)) 
    {
        $query ="insert into login(fname, lname, gender, cnum, address, email, pass) values('$firstname','$lastname',' $Gender','$num','$address','$gmail','$password')";
         
        mysqli_query($conn,$query);
        {
        echo "<script type='text/javascript'> alert('Successfully Register')</script>";
        }
    }
    else
    {
        echo "<script type='text/javascript'> alert('Please enter some valid Details')</script>";
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
    <div class="Signup">
        <h1>Signup</h1>
        <h4>IT'S FREE AND TAKE A MINUTE</h4>
        <form method="POST">
           
            <label> First Name </label>
            <input type="text" name="fname" Required>
            <label> Last Name </label>
            <input type="text" name="lname" Required>
            <label> Gender </label>
            <input type="text" name="gender" Required>
            <label> Contact Address </label>
            <input type="tel" name="cnum" Required>
            <label> Address </label>
            <input type="text" name="address" Required>
            <label> Email </label>
            <input type="email" name="email" Required>
            <label> Password </label>
            <input type="password" name="pass" Required>
            <input type="Submit" name="" value="Submit">
       
        </form>
        <p> By Clicking the Signup Button,you Agree our <br>
        <a href="">
            Tearm and condition
        </a> and <a href="#" >policy privacy</a>
    </p>
    <p>Already have an Account? <a href="login.php">Login here</a></p>
    </div>
</div>
</body>
</html>