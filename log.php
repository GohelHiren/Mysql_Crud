<?php

    include 'config.php';

    $em = $_POST['email'];
    $pw = $_POST['psw'];

    $sql = "SELECT * FROM register WHERE email='$em' AND password='$pw'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count == 1)
    {
        header('location:view.php');
    }
    else
    { ?>
        <script>
            alert("Incorrect Email or Password");
            window.location.href="index.php";
        </script>
    <?php }

?>