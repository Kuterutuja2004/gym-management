<?php
include('conn.php');
$query = "select * from traineer";
$result = mysqli_query($conn, $query);






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel=stylesheet href="trianeer_man.css">
</head>
<body>
   
    
    <div class="header">
        <a href="#default" class="logo">FITNESS CLUBS</a>
        <div class="header-right">
          <a class="active" href="#home"></a>
          <a href="../login/hime.php">Admin</a>
          <a href="../login/add_traineer.php">Add Traineer</a>
          
        </div>
    </div>
      
    
    <!--Creation table-->
    <div class="product-display">
      <form action="delete.php" method="POST">
        <div class="product-display-table" styles="overflow-x:auto;">
            <table class="table table-bordered">
               <thead>
                 <th class="table-danger" >Sr.no</th>
                 <th class="table-danger"  >Traineer Name</th>
                 <th class="table-danger" >Education Qualification</th>
                 <th class="table-danger">Address</th>
                 <th class="table-danger">Salary</th>
                <!-- <th class="table-danger" >View</th>-->
                 
                 <th class="table-danger">Delete</th>

               </thead>
               <tr>
                <?php
                        while($row = mysqli_fetch_assoc($result))
                        {

                          ?>

                    <td><?php echo $row ['tid']?></td>
                    <td><?php echo $row ['tname']?></td>
                    <td><?php echo $row ['teducation']?></td>
                    <td><?php echo $row ['taddress']?></td>
                    <td><?php echo $row ['tsalary']?></td>
                    
                    <td><a href="delete.php?id=<?php echo $row['tid']?>" class="btn btn-danger">DELETE</a></td>



                    


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

