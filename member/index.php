<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <?php if(isset($_SESSION["AUTH"])){ ?>
            <a href="#">登出</a>
        <?php }else{ ?>
            <a href="login.php">登入</a>
            <a href="#">註冊會員</a>
        <?php } ?>
    </nav>
</body>
</html>