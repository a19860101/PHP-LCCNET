<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_SESSION["AUTH"])){ ?>
        <?php echo $_SESSION["AUTH"]["user"]; ?>你好
        <a href="logout.php">登出</a>
    <?php }else{ ?>
        <div>訪客你好</div>
        <form action="response.php" method="post">
            <input type="text" name="user">
            <input type="text" name="mail">
            <input type="submit" value="登入">
        </form>
    <?php }?>

    
</body>
</html>