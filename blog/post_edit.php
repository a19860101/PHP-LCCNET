<?php
    include("function.php");
    extract($_GET);
    $post =  showPost($id);
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
    <h1>編輯文章</h1>
    <form action="post_update.php" method="post">
        <div>
            <label for="">文章標題</label>
            <input type="text" name="title" value="<?php echo $post["title"];?>">
        </div>
        <div>
            <label for="">內容</label>
            <textarea name="content" id="" cols="30" rows="10"><?php echo $post["content"];?></textarea>
        </div>
        <input type="hidden" name="id" value="<?php echo $post["id"];?>">
        <input type="submit" value="送出">
    </form>
</body>
</html>