<?php

echo $i_id = $_GET['id'];
include('conn.php');

$sql =" delete from instruments where i_id={$i_id}"; 
$result = mysqli_query($conn ,$sql) or die("Query Successful.");

header("location: http://localhost/login/instrument_man.php");

mysqli_close($conn);







?> 
