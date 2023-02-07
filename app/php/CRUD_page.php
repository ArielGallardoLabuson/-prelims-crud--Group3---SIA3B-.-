<?php
include('createData.php');
include('readData.php');
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
            </tr>
            <?php while ($result = mysqli_fetch_array($sqlresult)) { ?>
            <tr>

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
                <?php } ?>
            </tr>
        </table>
    </div>
</body>

</html>