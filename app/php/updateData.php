<?php
include('connection.php');

if(isset($_POST['updatebtn'])){
    $id = mysqli_real_escape_string($connection, $_POST['id']);
    $firstname = mysqli_real_escape_string($connection, $_POST['updatefirstname']);    
    $age = mysqli_real_escape_string($connection, $_POST['updateage']);
    $contact = mysqli_real_escape_string($connection, $_POST['updatecontact']);
    $email = mysqli_real_escape_string($connection, $_POST['updateemail']);
    $gender = mysqli_real_escape_string($connection, $_POST['updateinputgender']);

    $sql = "UPDATE sia_crud_table SET `name`='{$firstname}',`age`='$age',`contact_number`='{$contact}',`email_address`='{$email}',`gender`='{$gender}' WHERE `id` = '{$id}'";
    $query = mysqli_query($connection, $sql);
    echo ' <script> window.location.href=("http://localhost/CRUD%20System%20Integration%20(PHP%20+%20MySQL)/app/php/CRUD_page.php")</script>';
    


}
?>