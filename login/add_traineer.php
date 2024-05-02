<?php
// Assuming you have already connected to your database using mysqli or PDO
include("conn.php"); // Include your database connection file
if($conn){
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $tid = $_POST["traineer_id"];
    $tname = $_POST["traineer_name"];
    $teducation = $_POST["education_qualification"];
    $taddress = $_POST["adress_traineer"];
    $tsalary = $_POST["salary_traineer"];

    // SQL query to insert data into the database
    $query = "INSERT INTO  traineer VALUES ('$tid', '$tname', ' $teducation', '$taddress', '$tsalary')";

    // Execute the query
    if (mysqli_query($conn, $query)) {
        echo "<script type='text/javascript'> alert('Data inserted successfully!')</script>";
    } else {
        echo "<script type='text/javascript'> alert('Failed to insert data!')</script>";
    }
}

  } else {
    echo "Connection failed.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel=stylesheet href="add_trianeer.css">
</head>
<body>

    <div class="header">
        <a href="#default" class="logo">FITNESS CLUBS</a>
        <div class="header-right">
          <a class="active" href="#home"></a>
          <a href="../login/hime.php">Admin</a>
          
          
        </div>
    </div>  ,

   <!--add a product--> 
    <div class="container">
        <div class="admin-product-form-container"> 
            <form action="" method="post" enctype="multipart/form-data">
                <h3>Add New Trainer</h3>
                <input type="text" placeholder="Enter the Trainer id" name="traineer_id" class="box"style="color: black;">
                <input type="text" placeholder="Enter the Trainer Name" name="traineer_name" class="box"style="color: black;">
                <input type="text" placeholder="Education Qualification" name="education_qualification" class="box "style="color: black;">
                <input type="text" placeholder="Addrerss of Traineer" name="adress_traineer" class="box" style="color: black;">
                <input type="number" placeholder="Salary of Traineer" name="salary_traineer" class="box" style="color: black;">
                
                <div class="input-field">>
                    <input type ="submit" value>
               <input type="submit"  class="btn" name="add_product" value="add product">
</div>
                <div class="box">
                    
                    <a href="#popup-box"> 
                       Add Traineer
                    </a>
                </div>
                <div id="popup-box" class="modal">
                    <div class="content">
                        <h1 style="color: green;">
                        Traineer Added
                        </h1>
                        <b>
                            <p>Sucessfully !!!</p>
                        </b>
                        <a href="#"
                           class="box-close">
                            ×
                        </a>
                    </div>
                </div>

            </form>

        </div>
    </div>

</body>
</html>