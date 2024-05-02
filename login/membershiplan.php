<?php

session_start();

include("conn.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
  
   $name = $_POST["name"];
   $gmail= $_POST["email"];
   $contact = $_POST["cnum"];
   $address = $_POST["address"];
   $membership_plan = $_POST["membership_plan"];
   $membership_price = $_POST["membership_price"];



   $query ="insert into membership(name, email, cnum, address, membership_plan, membership_price) values(' $name','$gmail','$contact','$address','$membership_plan',' $membership_price')";
   if($conn->query($query) === TRUE){
    echo "New membership record created successfully";
   }
   
else
{
   
     echo "Error: " . $query . "<br>" . $conn->error;
}
  $conn->close();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Membership Form</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /*background-color: #0000;*/
            background-image: url('regimg.jpeg');
            background-size: cover;
            margin:0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        form {
           background-color: #0000;
           background:transparent;
            backdrop-filter: blur(10px); 
            border-radius: 8px;
            /*box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);*/
            padding: 30px;
            width: 400px;
            box-shadow: #3498db;
            /*text-align: center;*/
            /*box-shadow: 8px 8px 4px  grey;*/
            /*border: 3px solid #74b9ff;*/
           /* border-top-right-radius:40px ;*/
           /* border-bottom-left-radius: 40px;*/
            transition: transform 0.3s ease;
        }

        form:hover {
            transform: scale(1.05);
        }

        h1 {
            color:#3498db;
            align-items: center;
        }

        label {
            display: block;
            margin: 15px 0 5px;
            color:#fff;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            background:transparent;
            transition: border-color 0.3s ease;
            color:#ffff;
        }

        input:hover,
        input:focus {
            border-color:#3498db;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            color: #cccc;
            background:transparent;
        }
        option{
            background-color:black
            
        }

        button {
            background-color:#3498db;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color:#74b9ff;
        }
        
        
    /* Your existing styles */

    .back-button {
        display: block;
        background-color: #3498db;
        color: #fff;
        padding: 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 94%;
        text-decoration: none;
        margin-top: 10px;
        text-align: center;
        transition: background-color 0.3s ease;
    }

    .back-button:hover {
        background-color: #74b9ff;
    }


       
    </style>
</head>
<body>

    <form>
        <h1>MEMBERSHIP PLAN</h1>
        
        <label for="name">Name</label>
        <input type="text" id="name" name="name">

        <label for="email">Email</label>
        <input type="email" id="email" name="email">

        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}">

        <label for="address">Address</label>
        <input type="text" id="address" name="address">

        <label for="trainingType">Membership Plan</label>
        <select id="membershipplan" name="membershipplan">
            <option value="select">Select</option>
            <option value="Basic Plan">Basic Plan</option>
            <option value="Standard Plan">Standard Plan</option>
            <option value="Premium Plan">Premium Plan</option>
           
        </select>

        <label for="price">Membership Price</label>
        <select id="membershipprice" name="membershipprice">
                <option value="select">Select</option>
                <option value="Basic Plan">500 Rs/Month</option>
                <option value="Standard Plan">1000 Rs/Month</option>
                <option value="Premium Plan">1500 Rs/Month</option>
               
            </select>
           
        
           <button type="submit">Submit</button>
           <a href="home2.php" class="back-button">Back</a>
           
    </form>
    
    </a>
    </section>
    

</body>
</html>
