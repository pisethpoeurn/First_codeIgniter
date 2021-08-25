<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header">User Detail</div>
                    <div class="card-body">
                    <?php if($users): ?>
                        <?php foreach($users as $user): ?>
                            <h4>ID: <?php echo $user['id']?></h4><br>
                            <h4>Name: <?php echo $user['name']?></h4><br>
                            <h4>E-Mail: <?php echo $user['email']?></h4><br>
                            <h4>Gender: <?php echo $user['gender']?></h4><br>
                            <h4>Phone: <?php echo $user['phone']?></h4>
                        <?php endforeach?>
                    <?php endif?>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>
</html>