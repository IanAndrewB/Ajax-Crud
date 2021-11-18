<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>AJAX PHP MODAL CRUD</title>
</head>
<body>
    <div class="container py-4">
        <h1 class="text-center">AJAX PHP MODAL CRUD</h1>
        <button type="button" class="btn btn-dark my-3" data-bs-toggle="modal" data-bs-target="#insertModal">
        ADD NEW USER
        </button>
        <div id="displayDataTable">
        </div>
    </div>

    





     <!-- INSERT MODAL -->
     <div class="modal fade" id="insertModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New User</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                <div class="form-group mb-3">
                    <label for="completeName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="completeName" placeholder="Enter your name">
                </div>
                <div class="form-group mb-3">
                    <label for="completeEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="completeEmail" placeholder="Email Address">
                </div>
                <div class="form-group mb-3">
                    <label for="completeMobile" class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" id="completeMobile" placeholder="Mobile Number">
                </div>
                <div class="form-group mb-3">
                    <label for="completeLocation" class="form-label">Location</label>
                    <input type="text" class="form-control" id="completeLocation" placeholder="Location">
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-dark" onclick="addUser()">Submit</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            
        </div>
        </div>
    </div>
    </div>

    <!--BOOTSTRAP JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            displayData();
        });
        //DISPLAY FUNCTION
        function displayData()
        {
            var displayData="true";
            $.ajax({
                url:"db_display.php",
                type: 'post',
                data:{
                    displaySend:displayData
                },
                success:function(data,status)
                {
                    $('#displayDataTable').html(data);
                }
            });
        }

        function addUser(){
            var nameAdd = $('#completeName').val();
            var emailAdd = $('#completeEmail').val();
            var mobileAdd = $('#completeMobile').val();
            var locationAdd = $('#completeLocation').val();

            $.ajax({
                url:"db_insert.php",
                type: 'post',
                data:{
                    nameSend:nameAdd,
                    emailSend:emailAdd,
                    mobileSend:mobileAdd,
                    locationSend:locationAdd   
                },
                success:function(data,status)
                {
                    //FUNCTION TO DISPLAY DATA;
                    //console.log(status);
                    displayData();
                }
            });
        }
    </script>
</body>
</html>