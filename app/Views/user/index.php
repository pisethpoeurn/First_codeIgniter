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
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <i class="text-white">Add User</i>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title " id="exampleModalLabel">Add User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container mt-4">
                            <form action="<?= site_url('addUser')?>" method="POST">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <label for="email">E-Mail</label>
                                    <input type="mail" name="email" class="form-control" placeholder="Your E-Mail">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Your Password">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" class="form-control"
                                        placeholder="Your Phone Number">
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select class="form-control" name="gender">
                                        <option selected>Choose your gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Submite</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <a href="<?= site_url('getUserById/'.$user['id'])?>" class=""><i
                                class="material-icons text-success">visibility</i></a>
                        <!-- Button trigger modal -->
                        <button type="" class="btn btn-secondary" data-toggle="modal" data-target="#edit">
                            <i class="material-icons ">edit</i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="edit" tabindex="-1" role="dialog"
                            aria-labelledby="editLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title " id="editLabel">Edit User</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container mt-4">
                                            <form action="<?= site_url('updateUser')?>" method="POST">
                                                <div class="form-group">
                                                    <input type="hidden" name="id" class="form-control"
                                                        value="<?= $user['id']?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="Your Name" value="<?= $user['name']?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">E-Mail</label>
                                                    <input type="mail" name="email" class="form-control"
                                                        placeholder="Your E_Mial" value="<?= $user['email']?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" class="form-control"
                                                        placeholder="Your Password" value="<?= $user['password']?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone">Phone</label>
                                                    <input type="text" name="phone" class="form-control"
                                                        placeholder="Your Phone Number" value="<?= $user['phone']?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="gender">Gender</label>
                                                    <select class="form-control" name="gender">
                                                        <option
                                                            <?php if($user['gender'] == "Male"){ echo "selected"; } ?>
                                                            value="Male">Male</option>
                                                        <option
                                                            <?php if($user['gender'] == "Female"){ echo "selected"; } ?>
                                                            value="Female">Female</option>
                                                    </select>
                                                </div>
                                                <div class="text-right">
                                                    <a href="<?= site_url('user-list')?>"
                                                        class="btn btn-secondary ">Cancel</a>
                                                    <button type="submit" class="btn btn-primary ">Save Data</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="<?= site_url('deleteUser/'.$user['id'])?>" class=""
                            onclick="return confirm('Are you sure you want to delete this item')"><i
                                class="material-icons text-danger">delete</i></a>
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
    $(document).ready(function () {
        $('#user-list').DataTable();
    });
</script>
<?= $this->include('layout/footer')?>