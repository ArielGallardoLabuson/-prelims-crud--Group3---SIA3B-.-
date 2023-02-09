<?php
include('createData.php');
include('readData.php');
include('deleteData.php');
include('updateData.php');

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/crudstyle.css">
    <title>Document</title>
</head>

<body>
    <div class="main">
        <div class="updatebox">
            <div class="crud_update_box">
                <div class="header">
                    <h1>CRUD System Integration (PHP + MySQL)</h1>
                </div>
                <form action="" method="post">
                    <h2>Update Account</h2>
                    <div class="name">
                        <input type="hidden" class="id" name="id" placeholder="Enter first name">

                        <input type="text" class="updatefirstname" name="updatefirstname"
                            placeholder="Enter first name">
                    </div>
                    <div class="contactinfo">
                        <input type="text" class="updateage" name="updateage" placeholder="Enter Age">
                        <input type="number" class="updatecontact" name="updatecontact"
                            placeholder="Enter Contact Number">
                        <input type="email" class="updateemail" name="updateemail" placeholder="Enter email">
                    </div>
                    <div class="gender">

                        <input type="radio" class="inputgender" name="updateinputgender" value="Male" checked>
                        <label for="male">Male</label>
                        <input type="radio" class="inputgender" name="updateinputgender" value="female">
                        <label for="Female">Female</label>
                    </div>
                    <button type="submit" class="updatebtn" name="updatebtn">Update</button>
                   
                </form>

            </div>
        </div>

        <div class="crud_create_box">
            <div class="header">
                <h1>CRUD System Integration (PHP + MySQL)</h1>
            </div>
            <form action="" method="post">
                <h2>Create Account</h2>
                <div class="name">
                    <input type="text" class="inputname" name="firstname" placeholder="Enter first name">

                    <input type="text" class="inputname" name="lastname" placeholder="Enter last name">
                </div>
                <div class="contactinfo">
                    <input type="text" class="age" name="age" placeholder="Enter Age">
                    <input type="number" class="contact" name="contact" placeholder="Enter Contact Number">
                    <input type="email" class="email" name="email" placeholder="Enter email">
                </div>
                <div class="gender">

                    <input type="radio" class="inputgender" name="inputgender" value="Male" checked>
                    <label for="male">Male</label>
                    <input type="radio" class="inputgender" name="inputgender" value="female">
                    <label for="Female">Female</label>
                </div>
                <button type="submit" class="createbtn" name="createbtn">Create</button>
            </form>
        </div>

        <table>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Option</th>
            </tr>
            <?php while ($result = mysqli_fetch_array($sqlresult)) { ?>
                <tr>
                    <td class="hide">
                        <?php echo $result['id']; ?>
                    </td>
                    <td>
                        <?php echo $result['name']; ?>
                    </td>
                    <td>
                        <?php echo $result['age']; ?>
                    </td>
                    <td>
                        <?php echo $result['contact_number']; ?>
                    </td>
                    <td>
                        <?php echo $result['email_address']; ?>
                    </td>
                    <td>
                        <?php echo $result['gender']; ?>
                    </td>
                    <td>

                        <form action="" method="post">
                            <input type="hidden" name="deletedata" value="<?php echo $result['name']; ?>">
                            <button type="submit" class="delete" name="deletebtn">Delete</button>
                        </form>
                        <button class="update">Update</button>
                    </td>
                    <?php
            } ?>

            </tr>
        </table>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="../script/script.js"></script>

</html>