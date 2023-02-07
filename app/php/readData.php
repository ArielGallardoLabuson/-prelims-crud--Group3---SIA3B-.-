<?php
include('connection.php');

$sqlquery = "SELECT * FROM `SIA_crud_table` ";
$sqlresult =  mysqli_query($connection, $sqlquery);
?>