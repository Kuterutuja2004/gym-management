<?php
// Assuming you have already connected to your database using mysqli or PDO
include("conn.php"); // Include your database connection file
if($conn){
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $i_id = $_POST["instrument_id"];
    $lname_instru = $_POST["instrument_name"];
    $no_of_quantity = $_POST["no_of_quantity"];
    $condition_instru = $_POST["condition_of_instru"];
    $damaged_instru = $_POST["damaged_instru"];

    // SQL query to insert data into the database
    $query = "INSERT INTO instruments 
              VALUES ('$i_id', '$lname_instru', '$no_of_quantity', '$condition_instru', '$damaged_instru')";

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
    <link rel=stylesheet href="add_Instrument.css">
</head>
<body>

    <div class="header">
        <a href="#default" class="logo">FITNESS CLUBS</a>
        <div class="header-right">
          <a class="active" href="#home"></a>
          <a href="../login/hime.php">Admin</a>
          
          
        </div>
    </div>

   <!--add a product--> 
    <div class="container">
        <div class="admin-product-form-container"> 
            <form action="" method="post" enctype="multipart/form-data">
                <h3>Add New Instrument</h3>
                <input type="text" placeholder="Enter the Instrument Name" name="instrument_id" class="box" style="color: black;">
                <input type="text" placeholder="Enter the Instrument Name" name="instrument_name" class="box" style="color: black;">
                <input type="number" placeholder="Number of Quantity" name="no_of_quantity" class="box" style="color: black;">
                <input type="text" placeholder="Enter Condition of the Instruments" name="condition_of_instru" class="box" style="color: black;">
                <input type="number" placeholder="Number of Damaged Instrument" name="damaged_instru" class="box" style="color: black;">
                
                
                


                <div class="input-field">>
                    <input type ="submit" value>
               <input type="submit"  class="btn" name="add_product" value="add product">
</div>
                <div class="box">
                    
                    <a href="#popup-box"> 
                       Add instrument
                    </a>
                </div>
</div>
                <
                    </div>
                </div>

            </form>

        </div>
    </div>

</body>
</html>