<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First CodeIgniter4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body> -->
<?= $this->include('layout/header')?>
    <div class="container mt-4">
        <h2 class="text-bool text-center">User List</h2>
        <div class="d-flex">
            <a href="<?php echo site_url('formUser') ?>" class="btn btn-success mb-2">Add User</a>
        </div>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
        }
        ?>
        <div class="mt-3">
            <table class="table table-bordered" id="user-list">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>E-Mail</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($users): ?>
                        <?php foreach($users as $user): ?>
                        <tr>
                            <td><?php echo $user['id']; ?></td>
                            <td><?php echo $user['name']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td><?php echo $user['phone']; ?></td>
                            <td><?php echo $user['gender']; ?></td>
                            <td>
                                <a href="<?= site_url('formEdit/'.$user['id'])?>" class="btn btn-primary btn-sm">edit</a>
                                <a href="<?= site_url('deleteUser/'.$user['id'])?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item')">delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
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
<?= $this->include('layout/footer')?>