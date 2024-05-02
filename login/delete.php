<?php

$t_id = $_GET['id'];
include('conn.php');

$sql =" delete from traineer where tid={$t_id}"; 
$result = mysqli_query($conn ,$sql) or die("Query Successful.");

header("location: http://localhost/login/traineer_man.php");

mysqli_close($conn);



?> 
