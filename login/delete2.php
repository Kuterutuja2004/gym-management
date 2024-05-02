<?php

echo $m_id = $_GET['id'];
include('conn.php');

$sql =" delete from login where id={$m_id}"; 
$result = mysqli_query($conn ,$sql) or die("Query Successful.");

header("location: http://localhost/login/user_man.php");

mysqli_close($conn);







?> 
