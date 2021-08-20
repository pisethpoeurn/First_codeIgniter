<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First CodeIgniter4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header text-center">Edit User</div>
                    <div class="card-body">
                        <form action="<?= site_url('updateUser')?>" method="POST">
                            <div class="form-group">
                                <input type="hidden" name="id" class="form-control" value="<?= $users['id']?>">
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Your Name" value="<?= $users['name']?>">
                            </div>
                            <div class="form-group">
                                <label for="email">E-Mail</label>
                                <input type="mail" name="email" class="form-control" placeholder="Your E_Mial" value="<?= $users['email']?>">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Your Password" value="<?= $users['password']?>">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="Your Phone Number" value="<?= $users['phone']?>">
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select class="form-control" name="gender">
                                    <option <?php if($users['gender'] == "Male"){ echo "selected"; } ?> value="Male">Male</option>
                                    <option <?php if($users['gender'] == "Female"){ echo "selected"; } ?> value="Female">Female</option>
                                </select>
                            </div>
                            <div class="text-right">
                                <a href="<?= site_url('user-list')?>" class = "btn btn-secondary ">Cancel</a>
                                <button type="submit" class="btn btn-primary ">Save Data</button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
        $('#user-list').DataTable();
    } );
    </script>
</body>
</html>