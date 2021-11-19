<?php
    include 'db_conn.php';

    if(isset($_POST['updateID'])){
        $userId = $_POST['updateID'];
        $sql = "SELECT * FROM tbl_user WHERE id = $userId";
        $result = mysqli_query($conn, $sql);
        $response = array();
        while($row = mysqli_fetch_assoc($result))
        {
            $response = $row;
        }
        echo json_encode($response);
    }
    else{
        $response['status']=200;
        $response['message']="Invalid or Data Not Found!";
    }

    //UPDATE QUERY

    if(isset($_POST['hiddenData'])){
        $uniqueId = $_POST['hiddenData'];
        $name = $_POST['udpateName'];
        $email = $_POST['udpateEmail'];
        $mobile = $_POST['udpateMobile'];
        $location = $_POST['udpateLocation'];

        $sql = "UPDATE tbl_user SET name = '$name', email = '$email', mobile = '$mobile', location = '$location' WHERE id = $uniqueId";

        $result=mysqli_query($conn, $sql);
    }
?>