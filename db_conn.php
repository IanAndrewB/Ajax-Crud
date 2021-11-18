<?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'ajax';

    $conn = new mysqli($server, $user, $pass, $database);

    if(!$conn)
    {
        die(mysqli_error($conn));
    }

?>