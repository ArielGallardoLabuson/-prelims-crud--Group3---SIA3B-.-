<?php
include('connection.php');

if(isset($_POST['createbtn'])){
$firstname = mysqli_real_escape_string($connection, $_POST['firstname']);
$lastname = mysqli_real_escape_string($connection, $_POST['lastname']);

$name = $firstname." ".$lastname;
$age = mysqli_real_escape_string($connection, $_POST['age']);
$contact = mysqli_real_escape_string($connection, $_POST['contact']);
$email = mysqli_real_escape_string($connection, $_POST['email']);
$gender = mysqli_real_escape_string($connection, $_POST['inputgender']);

    $createsql = "INSERT INTO `SIA_crud_table`( `name`, `age`, `contact_number`, `email_address`, `gender`) VALUES ('{$name}','{$age}','{$contact}','{$email}','{$gender}')";
    $createquery = mysqli_query($connection, $createsql);
}
?>