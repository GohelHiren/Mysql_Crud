<?php

    include 'config.php';
    if(isset($_POST['update']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pass = $_POST['psw'];
        $phone = $_POST['phone'];
        $uid = $_POST['uid'];

        $sql = "UPDATE register SET firstname='$fname', lastname='$lname', email='$email', password='$pass', phone='$phone' WHERE id='$uid'";
        $result = mysqli_query($conn, $sql);
        if($result == TRUE)
        { ?>
            <script>
                alert("Your Record Updated Successfully");
                window.location.href='view.php';
            </script>
        <?php }
    }
    if(isset($_GET['id']))
    {
        $uid = $_GET['id'];
        $sql = "SELECT * FROM register WHERE id='$uid'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result))
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $fn = $row['firstname'];
                $ln = $row['lastname'];
                $em = $row['email'];
                $psw = $row['password'];
                $ph = $row['phone'];
                $uid = $row['id'];
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register Form</h1>
    <form method="POST">
        <input type="text" name="fname" placeholder="First Name" value="<?php echo $fn; ?>">
        <input type="hidden" name="uid" value="<?php echo $uid; ?>"><br><br>
        <input type="text" name="lname" placeholder="Last Name" value="<?php echo $ln; ?>"><br><br>
        <input type="email" name="email" placeholder="Email" value="<?php echo $em; ?>"><br><br>
        <input type="password" name="psw" placeholder="Password" value="<?php echo $psw; ?>"><br><br>
        <input type="tel" name="phone" placeholder="Phone No" value="<?php echo $ph; ?>"><br><br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>