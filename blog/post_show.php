<?php
    include("function.php");
    extract($_GET);
    $post = showPost($id);
    #$post = showPost($_GET["id"]);

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
    <div>
        <h2><?php echo $post["title"];?></h2>
        <div>
            <?php echo $post["content"];?>
        </div>
        <div>
            建立時間<?php echo $post["created_at"];?>
        </div>
        <div>
            更新時間<?php echo $post["updated_at"];?>
        </div>
        <a href="index.php">文章列表</a>
    </div>
</body>
</html>