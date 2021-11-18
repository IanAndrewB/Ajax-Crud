<?php
    include 'db_conn.php';

    if(isset($_POST['deleteSend']))
    {
        $del_id = $_POST['deleteSend'];

        $sql = "DELETE FROM tbl_user WHERE id = $del_id";
        $result = mysqli_query($conn, $sql);
    }

?>