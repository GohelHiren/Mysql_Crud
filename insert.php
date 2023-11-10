<?php

    include 'config.php';
    if(isset($_POST['submit']))
    {
        $fn = $_POST['fname'];
        $ln = $_POST['lname'];
        $em = $_POST['email'];
        $pw = $_POST['psw'];
        $ph = $_POST['phone'];

        $sql = "INSERT INTO register (firstname, lastname, email, password, phone) VALUES ('$fn','$ln','$em','$pw','$ph')";
        $result = mysqli_query($conn, $sql);

        if($result == TRUE)
        { ?>
            <script>
                alert("Your Record Inserted Successfully");
                window.location.href="index.php";
            </script>
        <?php }
    }

?>