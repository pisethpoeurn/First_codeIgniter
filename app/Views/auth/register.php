<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container mt-4">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-header text-center "><h3>Register</h3></div>
                <div class="card-footer">
                    <form action="<?= site_url('register')?>" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="name" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-Mail</label>
                            <input type="email" class="form-control" name="email" placeholder="E-Mail" required>
                        </div>
                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
                            <span id="messages_error" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label for="pass">Confirm Password</label>
                            <input type="password" id="confirmPassword" class="form-control" name="confirmPassword" placeholder="Password Conformation" required>
                            <span id="error" class="text-danger"></span>
                        </div>
                        <button type="submit" class="btn btn-success float-right">Save</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.2.0/main.min.js"></script>

    <script type="text/javaScript">
        $(document).ready(function () {
            $(document).on('keyup', function () {
                var new_pwd = $('#password').val();
                var confirm_pwd = $('#confirmPassword').val();
                if(confirm_pwd == new_pwd ){
                    $('#error').html('');
                }else if(confirm_pwd == ''){
                    $('#error').html('');
                }else {
                    $('#error').html('The password does not match.');
                }
                if(new_pwd < 8) {
                    $('#messages_error').html("password must be equal or longer than 8 characters");
                }else {
                    $('#messages_error').html(" ");
                }
            }) 
        });
        $("#success-alert").fadeTo(6000, 5000).slideUp(1000, function(){
        $("#success-alert").slideUp(1000);
    });
    </script>
</body>
</html>

