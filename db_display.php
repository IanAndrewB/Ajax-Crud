<?php
    include 'db_conn.php';

    if(isset($_POST['displaySend']))
    {
        $table = '<table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Location</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>';
        $sql = "SELECT * FROM tbl_user";
        $result = mysqli_query($conn, $sql);
        while($row=mysqli_fetch_assoc($result))
        {
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            $location = $row['location'];
            $table.='<tr>
            <td scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$location.'</td>
            <td></td>
          </tr>'; 
        }
        $table.='</table>';
        echo $table;
    }
?>