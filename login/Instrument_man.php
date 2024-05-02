

<?php
include('conn.php');
$query = "select * from instruments";
$result = mysqli_query($conn, $query);





?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel=stylesheet href="Instrument_man.css">
</head>
<body>
   
    
    <div class="header">
        <a href="#default" class="logo">FITNESS CLUBS</a>
        <div class="header-right">
          <a class="active" href="#home"></a>
          <a href="../login/hime.php">Admin</a>
          <a href="../login/add_Instrument.php">Add Instruments</a>
          
        </div>
    </div>
      
    
    <!--Creation table-->
    <div class="product-display">
        <div class="product-display-table" styles="overflow-x:auto;">
            <table class="table table-bordered">
               <thead>
                 <th class="table-danger">Sr.no</th>
                 <th class="table-danger">Instrument Name</th>
                 <th class="table-danger">Number of Quantity</th>
                 <th class="table-danger">Condition</th>
                 <th class="table-danger">no of damaged instruments</th>
                 
                 
                 <th class="table-danger">Delete</th>
               </thead>

               <tr>
                <?php
                        while($row = mysqli_fetch_assoc($result))
                        {

                 ?>

                    <td><?php echo $row ['i_id']?></td>
                    <td><?php echo $row ['lname_instru']?></td>
                    <td><?php echo $row ['no_of_quantity']?></td>
                    <td><?php echo $row ['condition_instru']?></td>
                    <td><?php echo $row ['damaged_instru']?></td>
                    
                    <td><a href='delete1.php?id=<?php echo $row['i_id']?>' class ="btn btn-danger">DELETE</a></td>


                        </tr>
                      <?php
                        }

                        ?>

    <script>
        window.onscroll = function() {myFunction()};
        
        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;
        
        function myFunction() {
          if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
          } else {
            navbar.classList.remove("sticky");
          }
        }
        </script>
        
    
</body>
</html>