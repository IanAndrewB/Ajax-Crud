<?php
    include 'db_conn.php';

    extract($_POST);

    if(isset($_POST['nameSend']) && isset($_POST['emailSend']) && isset($_POST['mobileSend']) && isset($_POST['locationSend']))
    {
        $sql = "INSERT INTO tbl_user (name,email,mobile,location) VALUES ('$nameSend','$emailSend','$mobileSend','$locationSend')";

        $result = mysqli_query($conn, $sql);
    }
?>