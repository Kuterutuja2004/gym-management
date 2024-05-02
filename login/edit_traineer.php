<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel=stylesheet href="edit_traineer.css">
</head>
<body>

<div class="header">
        <a href="#default" class="logo">FITNESS CLUBS</a>
        <div class="header-right">
          <a class="active" href="#home"></a>
          <a href="../login/hime.php">Admin</a>
          
          
        </div>
    </div>  
<div class="container">
        <div class="admin-product-form-container"> 
            <form action="" method="post" enctype="multipart/form-data">
                <h3>Add New Trainer</h3>
                <input type="text" placeholder="Enter the Trainer id" name="traineer_id" class="box"style="color: black;">
                <input type="text" placeholder="Enter the Trainer Name" name="traineer_name" class="box"style="color: black;">
                <input type="text" placeholder="Education Qualification" name="education_qualification" class="box "style="color: black;">
                <input type="text" placeholder="Addrerss of Traineer" name="adress_traineer" class="box" style="color: black;">
                <input type="number" placeholder="Salary of Traineer" name="salary_traineer" class="box" style="color: black;">
                
               
                    
               <input type="submit"  class="open-button" name="edit_trainer" value="edit traineer">
</div>

            </form>

        </div>
    </div>
</body>
</html>