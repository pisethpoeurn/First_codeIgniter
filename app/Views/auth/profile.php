<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header">User Profile</div>
                    <div class="card-body">
                    <?php if($message): ?>
                        <?php foreach($message as $ms): ?>
                            <?php echo $ms['name']?><br>
                            <?php echo $ms['email']?><br>
                            <?php echo $ms['gender']?><br>
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