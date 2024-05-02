<?php

include('conn.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hime.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Admin Panel</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Fitness Club </h1>
        </div>
        <ul>
           <!-- <li><img src="dashboard (2).png" alt="">&nbsp; <span>Dashboard</span> </li>-->
            <li><a href="../login/user_man.php">User</a></li>
            <li><a href="../login/traineer_man.php">Traineer</a></li>
            <li><a href="../login/Instrument_man.php">Instrument</a></li>
                
            
            <li><a href="../login/home2.php">Log out</a></span></li>
            <!--<li><img src="settings.png" alt="">&nbsp;<span>Settings</span> </li>-->
        </ul>
    </div>

    <div class="container">
        <div class="header">
            <div class="nav">
                <!--user registered-->
                <div class="user">
                    <!--<a href="#" class="btn">Add New</a>-->
                    <!--<img src="pexels-cottonbro-studio-4753921.jpg" alt="">-->
                    <div class="img-case">
                        <!--<img src="user.png" alt="">-->
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                    <?php
                        $dash_category_query ="SELECT * from login";
                        $dash_category_query_run = mysqli_query($conn, $dash_category_query);
                        if($category_total = mysqli_num_rows($dash_category_query_run ))
                        {
                           echo'<h1>'.$category_total.'</h1>
                           <h3>user</h3>';
                        }
                        else
                        {
                            echo'<h1>no data</h1>
                            <h3>user</h3>';
                        }

                        ?>
    
                        
                    </div>
                    <div class="icon-case">
                        <img src="user.png" alt="">
                    </div>
                </div>
                <!--traineer-->
                <div class="card">
                    <div class="box">
                        
                        <?php
                        $dash_category_query ="SELECT * from traineer";
                        $dash_category_query_run = mysqli_query($conn, $dash_category_query);
                        if($category_total = mysqli_num_rows($dash_category_query_run ))
                        {
                           echo'<h1>'.$category_total.'</h1>
                           <h3>traineers</h3>';
                        }
                        else
                        {
                            echo'<h1>no data</h1>
                            <h3>traineers</h3>';
                        }

                        ?>
                    </div>
                    <div class="icon-case">
                        <img src="gym.png" alt="">
                    </div>
                </div>
                 <!--instruments-->
                <div class="card">
                    <div class="box">
                    <?php
                        $dash_category_query ="SELECT * from instruments";
                        $dash_category_query_run = mysqli_query($conn, $dash_category_query);
                        if($category_total = mysqli_num_rows($dash_category_query_run ))
                        {
                           echo'<h1>'.$category_total.'</h1>
                           <h3>instruments</h3>';
                        }
                        else
                        {
                            echo'<h1>no data</h1>
                            <h3>instruments</h3>';
                        }

                        ?>
                        </div>
                    <div class="icon-case">
                        <img src="dumbbell.png" alt="">
                    </div>
                </div>
                <!--membership taken-->
                <div class="card">
                    <div class="box">
                    <?php
                        $dash_category_query ="SELECT * from  membership";
                        $dash_category_query_run = mysqli_query($conn, $dash_category_query);
                        if($category_total = mysqli_num_rows($dash_category_query_run ))
                        {
                           echo'<h1>'.$category_total.'</h1>
                           <h3>premium user</h3>';
                        }
                        else
                        {
                            echo'<h1>no data</h1>
                            <h3>premium user</h3>';
                        }

                        ?>
                        </div>
                    <div class="icon-case">
                        <img src="salary.png" alt="">
                    </div>
                </div>
                    
            <!--<div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Recent membership Taken</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Gym Branch</th>
                            <th>Membership taken</th>
                            <th>Option</th>
                        </tr>
                        <tr>
                            <td>Vaishnavi Nerpgar</td>
                            <td>Odha </td>
                            <td>1 month</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>Tejasvi Pagar</td>
                            <td>Nashik</td>
                            <td>3 month</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>Rutuja Kute</td>
                            <td>Odha</td>
                            <td>2 month</td>
                           <!-- <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>Tejal Nagare</td>
                            <td>Nashik</td>
                            <td>3 month</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>Divya Thakare</td>
                            <td>Odha</td>
                            <td>6 month</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>Shruti Patil</td>
                            <td>Nashik</td>
                            <td>3 month</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>New Users</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>option</th>
                        </tr>
                        <tr>
                            <td><img src="profile.png" alt=""></td>
                            <td>Shruti Patil</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="woman.png" alt=""></td>
                            <td>Tejal Nagare</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="profile.png" alt=""></td>
                            <td>Divya Thakare</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="woman.png" alt=""></td>
                            <td>Tejasvi Pagar</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>

                    </table>
                </div>-->
            </div>
        </div>
    </div>
</body>

</html>