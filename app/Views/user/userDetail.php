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
                            <?php echo $user['id']?>
                            <?php echo $user['name']?>
                            <?php echo $user['email']?>
                            
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