
<?php
include('conn.php');
$query = "select * from login";
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
    <link rel=stylesheet href="user_man.css">
</head>
<body>
   
    
    <div class="header">
        <a href="#default" class="logo">FITNESS CLUBS</a>
        <div class="header-right">
          <a class="active" href="#home"></a>
          <a href="hime.php">Admin</a>
          <a href="add_user.php">Add New</a>
          
        </div>
    </div>
      
    
    <!--Creation table-->
    <div class="product-display">
        <div class="product-display-table" styles="overflow-x:auto;">
            <table class="table table-striped">
               <thead>
                 <th class="table-danger">id</th>
                 <th class="table-danger">first name</th>
                 <th class="table-danger">last name</th>
                 <th class="table-danger">gender/th>
                 <th class="table-danger">contact number</th>
                 <th class="table-danger">address</th>
                 <th class="table-danger">email</th>
                 <th class="table-danger">password</th>
                 



                 
                 
                 <th class="table-danger">Delete</th>
               </thead>
               <tr>
                <?php
                        while($row = mysqli_fetch_assoc($result))
                        {

                          ?>

                    <td><?php echo $row ['id']?></td>
                    <td><?php echo $row ['fname']?></td>
                    <td><?php echo $row ['lname']?></td>
                    <td><?php echo $row ['gender']?></td>
                    <td><?php echo $row ['cnum']?></td>
                    <td><?php echo $row ['address']?></td>
                    <td><?php echo $row ['email']?></td>
                    <td><?php echo $row ['pass']?></td>

                    
                    <td><a href="delete2.php?id=<?php echo $row['id']?>" class="btn btn-danger">DELETE</a></td>



                    


                        </tr>
                      <?php
                        }

                        ?>


              
                
                    </tbody>
            </table>  
         </div>   

    </div>

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