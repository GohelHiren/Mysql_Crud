<?php

    include 'config.php';
    $sql = "SELECT * FROM register";
    $result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <table border="1" cellpadding="15" cellspacing="0">
            <tr>
                <th>Sr No</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
            <?php
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['firstname']; ?></td>
                            <td><?php echo $row['lastname']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                            <td><a href="update.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                        </tr>
                    <?php }
                }
            ?>
        </table>
    </center>
</body>
</html>