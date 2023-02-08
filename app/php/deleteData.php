<?php
include('connection.php');
if(isset($_POST['deletebtn'])){
    $deletedata = mysqli_real_escape_string($connection, $_POST['deletedata']);
    $sql = "DELETE FROM `sia_crud_table` WHERE `name` = '{$deletedata}' ";
    $query = mysqli_query($connection, $sql);
    echo '<script> window.location.href="http://localhost/CRUD%20System%20Integration%20(PHP%20+%20MySQL)/app/php/CRUD_page.php" </script>';
}

?>